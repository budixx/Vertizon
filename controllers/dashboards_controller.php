<?php

class DashboardsController extends AppController {
	
	var $uses = array();
	var $helpers = array('Phpthumb');
	
	function index()
	{
		$banners = ClassRegistry::init('Banner')->find('all');
		$news = ClassRegistry::init('Content')->find('all',array('conditions' => array('Content.type_id' => 1),'order' => 'created DESC','limit' => 2));
		
		$this->set(compact('banners','news'));
	}
}
?>