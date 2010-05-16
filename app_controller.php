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
		
		$this->set(compact('menuses'));
	}
	
}
?>