<?php
/* Menu Test cases generated on: 2010-05-06 11:05:09 : 1273120989*/
App::import('Model', 'Menu');

class MenuTestCase extends CakeTestCase {
	var $fixtures = array('app.menu');

	function startTest() {
		$this->Menu =& ClassRegistry::init('Menu');
	}

	function endTest() {
		unset($this->Menu);
		ClassRegistry::flush();
	}

}
?>