<?php

class DashboardsController extends AppController {
	
	var $uses = array();
	var $helpers = array('Phpthumb');
	
	function index()
	{
		$banners =	ClassRegistry::init('Banner')->find('all');
		
		$this->set(compact('banners'));
	}
}
?>