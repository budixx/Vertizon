<?php

class UploadComponent extends Object {

	var $components = array('Session');
	var $controller = null;
	var $image = null;
	var $folder = null;
	var $model = null;
	/**
	 * initialize the component
	 *
	 * @param none
	 * @return filename
	 * @access public
	 */
	
	function initialize(&$controller)
	{
		$this->controller =& $controller;
	}
	
	/**
	 * upload the files
	 *
	 * @param none
	 * @return filename
	 * @access public
	 */
	
	function uploadFiles($formdata, $itemId = null, $redirect = null) {
		// setup dir names absolute and relative
		$folder_url = WWW_ROOT.$this->folder;
		$rel_url = $this->folder;

		// create the folder if it does not exist
		if(!is_dir($folder_url)) {
			mkdir($folder_url);
		}
			
		// if itemId is set create an item folder
		if($itemId) {
			// set new absolute folder
			$folder_url = WWW_ROOT.$this->folder.'/'.$itemId;
			// set new relative folder
			$rel_url = $this->folder.'/'.$itemId;
			// create directory
			if(!is_dir($folder_url)) {
				mkdir($folder_url);
			}
		}

		// list of permitted file types, this is only images but documents can be added
		$permitted = 10000000;
		$permittedtype = array('image/gif','image/jpeg','image/pjpeg','image/png');

		// loop through and deal with the files

		//foreach($formdata as $file) {
		$file = $formdata;
		// replace spaces with underscores
		$filename = str_replace(' ', '_', $file['name']);
		// assume filetype is false
		$typeOK = false;
		// check filetype is ok
		foreach($permittedtype as $type) {
			if($type == $file['type'] && $file['size'] <= $permitted) {
				$typeOK = true;
				break;
			}
		}
			
			
		// if file type ok upload the file
		if($typeOK) {
			// switch based on error code
			switch($file['error']) {
				case 0:
					// check filename already exists
					if(!file_exists($folder_url.'/'.$filename)) {
						// create full filename
						$full_url = $folder_url.'/'.$filename;
						$url = $rel_url.'/'.$filename;
						// upload the file
						$success = move_uploaded_file($file['tmp_name'], $url);
					} else {
						// create unique filename and upload file
						ini_set('date.timezone', 'Europe/London');
						$now = date('Y-m-d-His');
						$full_url = $folder_url.'/'.$now.$filename;
						$url = $rel_url.'/'.$now.$filename;
						$success = move_uploaded_file($file['tmp_name'], $url);
					}
					// if upload was successful
					if($success) {
						// save the url of the file
						$result['urls'][] = $url;
					} else {
						$result['errors'][] = "Error uploaded $filename. Please try again.";
					}
					break;
				case 3:
					// an error occured
					$result['errors'][] = "Error uploading $filename. Please try again.";
					break;
				default:
					// an error occured
					$result['errors'][] = "System error uploading $filename. Contact webmaster.";
					break;
			}
		} elseif($file['error'] == 4) {
			// no file was selected for upload
			$result['nofiles'][] = "No file Selected";
		} else {
			// unacceptable file type
			$result['errors'][] = "$filename cannot be uploaded. max size is 10MB, Format .gif,jpeg or png";
		}
		//}
		return $this->checkfiles($result,$redirect);
	}

	/**
	 * delete the files
	 *
	 * @param none
	 * @return boolean
	 * @access public
	 */
	
	function deleteFiles($path)
	{
		if (unlink(ROOT.'/'.APP_DIR.'/webroot/'.$path)){
			return true;
		}
		else {
			return false;
		}

	}

	/**
	 * check the uploadfiles, redirect if there is an error
	 *
	 * @param none
	 * @return filename
	 * @access public
	 */

	function checkfiles($files,$redirect = null)
	{
		if(!empty($files['errors'][0]))
		{
			$this->Session->setFlash($files['errors'][0]);
			$this->controller->redirect(!empty($redirect) ? $redirect : $this->controller->referer());
		}

		return '/'.$files['urls'][0];
	}
	
	/**
	 * function to edit the files
	 *
	 * @param model: the data of the model
	 * @param data: the data that came from the form
	 * @return filename
	 * @access public
	 */
	
	function editFiles($model,$data,$itemId = null)
	{
		if(empty($data[$this->model][$this->image]['name']))
		{
			return $model[$this->model][$this->image];
		}
		else
		{
			#first delete the files
			$this->deleteFiles($model[$this->model][$this->image]);
			
			#return the name
			return $this->uploadFiles($data[$this->model][$this->image],$itemId);
		}
	}
}

?>