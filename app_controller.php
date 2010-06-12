<?php
class AppController extends Controller {

	var $components = array('Session');
	var $helpers = array('Html','Form','Javascript','Session','Time','Text');
	
	function beforeFilter()
	{
		if(isset($this->params['admin']))
		{
			$this->layout = 'admin';
		}
		
		#get all the menu
		$menuses = ClassRegistry::init('Menus')->find('all');
		
		#get the left categories for product
		$left_categories = ClassRegistry::init('Pcategory')->find('all');

		$this->set(compact('menuses','left_categories'));
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
		if(empty($redirect))
		{
			if($this->referer() == '/' || $this->referer() == '/'.$this->params['url']['url'])
			{
				$this->redirect(array('controller' => 'dashboards','action' => 'index'));
			}
			else
			{
				$this->redirect($this->referer());
			}
		}
		else
		{
			$this->redirect($redirect);
		}
	}
}
?>