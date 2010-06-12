<?php

class DashboardsController extends AppController {
	
	var $uses = array();
	var $helpers = array('Phpthumb');
	
	function index()
	{
		$banners = ClassRegistry::init('Banner')->find('all');
		$news = ClassRegistry::init('Content')->find('all',array('conditions' => array('Content.type_id' => 1),'order' => 'created DESC','limit' => 2));
		$featureds = ClassRegistry::init('Featured')->find('all');
				
		$this->set(compact('banners','news','featureds'));
	}
	
	function admin_index() {
		
	}
}
?>