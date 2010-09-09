<?php
class AppController extends Controller {

	var $components = array('Session','Auth');
	var $helpers = array('Html','Form','Javascript','Session','Time','Text','Phpthumb');
	
	function beforeFilter()
	{
		if(isset($this->params['admin'])) {
			$this->layout = 'admin';
			$this->Auth->deny();
			$this->Auth->autoRedirect = false;
		}
		else {
			$this->Auth->allow();
		}
		
		#get all the menu
		$menuses = ClassRegistry::init('Menus')->find('all');
		
		#get the left variables
		$pcategories = ClassRegistry::init('Pcategory')->find('all');
		$left_featureds = ClassRegistry::init('Product')->find('all',array('conditions' => array('Product.featured' => 1)));

		$this->set(compact('menuses','pcategories','left_featureds'));
	}
	
	/**
	 * set the error message and redirect to referer if action is null
	 *
	 * @param the warning
	 * @param redirect action
	 * @return none
	 * @access public
	 */

	function flashWarning($msg,$redirect = null)
	{
		$this->Session->setFlash($msg);
		if(empty($redirect)) {
			if($this->referer() == '/' || $this->referer() == '/'.$this->params['url']['url'])
				$this->redirect(array('controller' => 'dashboards','action' => 'index'));
			else
				$this->redirect($this->referer());
		}
		else
			$this->redirect($redirect);
	}
	
	/**
	 * function to send email
	 *
	 * @param $details array of details of sending email
	 * @param $data data that needed by email to be sended to the layout
	 * @return none
	 * @access private
	 */
	
	function _sendemail($details,$data) {
		$this->Email->to = $details['to'];
		$this->Email->subject = $details['subject'];
		$this->Email->replyTo = empty($details['replyTo']) ? 'support@vertizon-indonesia.com' : $details['replyTo'];
		$this->Email->from = empty($details['from']) ? 'Vertizon <support@vertizon-indonesia.com>' : $details['from'];
		$this->Email->template = $details['template'];
		if(!empty($details['filePaths']) && !empty($details['attachments'])) {
			$this->Email->filePaths = $details['filePaths'];
			$this->Email->attachments = $details['attachments']; 
		}
		$this->Email->sendAs = $details['sendAs'];

		$this->set(compact('data'));
		$this->Email->send();
	}
}
?>