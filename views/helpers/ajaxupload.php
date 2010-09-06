<?php 
/*
 * Created on 14.04.2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

 class AjaxuploadHelper extends AppHelper {

 	var $helpers = array('Javascript', 'Ajax', 'Html');

/*
 * Wrapper function generating the javascript for ajaxupload and integrating the
 * Javascript file only when the helper is actually used to save bandwidth and 
 * faster rendering of the page in a browser
 * 
 * @param	string	$id ID of the DOM element that sould be observed to upload
 * @param	string	$script the basic script informations to be wrapped
 * @return	string	A Javascript codeblock
 */

 	function _wrapper($id, $script) {
		$scr = implode(',', $script);
 		#$script = "document.observe(\"dom:loaded\", function() {new Ajax_upload('$id',{{$scr}});});";
 		$script = "$(document).ready(function(){jQuery(function(){new AjaxUpload('$id',{{$scr}});});});";
 		return $this->Javascript->codeBlock($script);
 	}

/*
 * Function to create minimal options for ajaxupload
 * 
 * @param	array	$options Array with options for the upload script
 * @param	array	$options['data'] Array containing additional data to be 
 * 					transmitted
 * @param	boolean	$options['autoSubmit'] Submit after file selection
 * @param	string	$options['responseType'] The type of data that you're 
 * 					expecting back from the server. Html (text) and xml are 
 * 					detected automatically.
 * @return	string	basic options for ajaxupload
 */

function _options($options = null) {
    $return = array();
    if (!empty($options['data'])) {
        $data = $options['data'];
        $ret = "data: {";
        foreach ($data as $key=>$value) {
            $retdata[] = '\''.$key.'\' : \''.$value.'\'';
        }
        $retdata = join(' , ',$retdata);
        $ret .= $retdata."} ";
        $return[] = $ret;
    }
    if (!empty($options['autoSubmit'])) {
        $return[] = "autoSubmit: {$options['autoSubmit']}";
    }
    if (!empty($options['responseType'])) {
        $return[] = "responseType: {$options['responseType']}";
    }
    return $return;
} 

/*
 * Function to get the url from a Cake-relative URL or array of URL parameters, 
 * or external URL (starts with http://)
 * 
 * @param  	mixed   $url Cake-relative URL or array of URL parameters, or 
 * 					external URL (starts with http://)
 * @return	string	an URL
 */
 	
 	function _url($url) {
 		return "action: \"".Router::url($url)."\"";
	}

/* 
 * Function to get the name for the data via the controller model of the link
 * 
 * @param  	mixed   $url Cake-relative URL or array of URL parameters, or 
 * 					external URL (starts with http://)
 * @return	string	name of the file transfer object
 */
	
	function _name($url) {
		$name = Inflector::classify($url['controller']);
		return "name: \"data[$name][File]\"";
	}

/*
 * Convienience Function to the the prototype element to a DOM id
 * 
 * @param	string	$id ID of a DOM element
 * @return	string	prototype element
 */

	function _id($id) {
		return "$('$id')";
	}

/*
 * Function to create the onSubmit function for ajaxupload
 * 
 * @param 	string 	$id ID of the DOM element that sould be observed to upload
 * @param	array	$options Array with options for the upload script
 * @param	mixed	$options['files'] Type of the files allowed to be uploaded 
 * 					'image', 'text', 'video', 'audio'
 * @param	string	$options['busy'] ID of a upload indicator element
 * @param	string	$options['disable'] Disables the element used to upload
 * @return	string	generated onSubmit function
 */
	
	function _submit($id, $options) {
		$submit = "";
		if (!empty($options['files'])) {
			$files = array();
			if (is_array($options['files'])) {
				foreach ($options['files'] as $type) {
					$files[] = $this->__files(strtolower($type));
				}
				$file = implode("|", $files);
				$type = implode(", ", $options['files']);
			} else {
				$file = $this->__files($options['files']);
				$type = $options['files'];
			}
			$submit .= "if (ext && /^($file)$/.test(ext)){ } else { alert('Only $type files allowed'); return false; } ";
		}
		if (!empty($options['busy'])) {
			$submit .= "$('{$options['busy']}').toggle(); ";
		}
		if (!empty($options['disable'])) {
			$submit .= "$id.disable; ";
		}
		return "onSubmit: function(file, ext){".$submit."}";
	}

/* 
 * Convenience function to get allowed filetypes
 * 
 * @param	string	$filetype Type of the files allowed to be uploaded 'image', 
 * 					'text', 'video', 'audio'
 * @return	string	A string to be used in a reg-ex
 */
	
	function __files($filetype) {
		switch ($filetype) {
			case "image":
				$return = "jpg|png|jpeg|gif";
				break;
			case "text":
				$return = "txt|html|htm|doc|odt";
				break;
			case "video":
				$return = "flv";
				break;
			case "music":
				$return = "mp3";
				break;
			default:
				$return = "";
				break;
		}
		return $return;
	}

/*
 * Function to create the onComplete function for ajaxupload
 * 
 * @param 	string 	$id ID of the DOM element that sould be observed to upload
 * @param	array	$options Array with options for the upload script
 * @param	string	$options['busy'] ID of a upload indicator element
 * @param	string	$options['disable'] Disables the element used to upload	 
 * @param	string	$options['update']['id'] ID of the element to be updated
 * 					with returned data
 * @param	boolean	$options['update']['reply'] Indicates of you use the 
 * 					filename or the reply to update the element, true for 
 * 					response
 * @param	string	$options['update']['element'] type of a new element that
 * 					is going to be appended to the updated element
 * @return	string	generated onComplete function
 */

	function _complete($id, $options) {
		$submit = "";
		if (!empty($options['busy'])) {
			$submit .= "$('{$options['busy']}').toggle(); ";
		}
		if (!empty($options['disable'])) {
			$submit .= "$id.enable; ";
		}
		if (!empty($options['update'])) {
			if (is_array($options['update'])) {
				$type = $options['update']['reply']?'response':'file';
				if (!empty($options['update']['element'])) {
					$submit .= "$$('#{$options['update']['id']}')[0].insert(new Element('{$options['update']['element']}').update({$type})); ";
				} else {
					$submit .= $this->_id($options['update']['id']).".html({$type});";
				}
			}
		}
		return "onComplete: function(file, response){".$submit."}";
	}
	
/*
 * Main Function for uploading using Ajaxupload
 *
 * @param 	string 	$button_id Id of the DOM element that sould be observed 
 * 					to upload
 * @param  	mixed   $url Cake-relative URL or array of URL parameters, or 
 * 					external URL (starts with http://)
 * @param	array	$options Array with options for the upload script
 * @param	array	$options['data'] Array containing additional data to be 
 * 					transmitted
 * @param	boolean	$options['autoSubmit'] Submit after file selection
 * @param	string	$options['responseType'] The type of data that you're 
 * 					expecting back from the server. Html (text) and xml are 
 * 					detected automatically.
 * @param	mixed	$options['files'] Type of the files allowed to be 
 * 					uploaded 'image', 'text', 'video', 'audio'
 * @param	string	$options['busy'] ID of a upload indicator element
 * @param	string	$options['disable'] Disables the element used to upload
 * @param	string	$options['update']['id'] ID of the element to be updated
 * 					with returned data
 * @param	boolean	$options['update']['reply'] Indicates of you use the 
 * 					filename or the reply to update the element, true for 
 * 					response
 * @param	string	$options['update']['element'] type of a new element that
 * 					is going to be appended to the updated element
 * @return	string	A javascript string
*/

	function upload($button_id, $url, $options) {
		$script = $this->_options($options);
		$script[] = $this->_url($url);
		$script[] = $this->_name($url);
		$script[] = $this->_submit($this->_id($button_id), $options);
		$script[] = $this->_complete($this->_id($button_id), $options);
		return $this->_wrapper($button_id, $script);
	}
 }
?>