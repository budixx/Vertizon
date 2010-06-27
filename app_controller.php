<?php
class AppController extends Controller {

	var $components = array('Session','Auth');
	var $helpers = array('Html','Form','Javascript','Session','Time','Text','Phpthumb');
	
	function beforeFilter()
	{
		if(isset($this->params['admin'])) {
			$this->layout = 'admin';
			$this->Auth->deny();
		}
		else {
			$this->Auth->allow();
		}
		
		#get all the menu
		$menuses = ClassRegistry::init('Menus')->find('all');
		
		#get the left variables
		$left_categories = ClassRegistry::init('Pcategory')->find('all');
		$left_featureds = ClassRegistry::init('Product')->find('all',array('conditions' => array('Product.featured' => 1)));

		$this->set(compact('menuses','left_categories','left_featureds'));
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