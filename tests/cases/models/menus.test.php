<?php
/* Menus Test cases generated on: 2010-05-15 16:05:23 : 1273917563*/
App::import('Model', 'Menus');

class MenusTestCase extends CakeTestCase {
	var $fixtures = array('app.menus');

	function startTest() {
		$this->Menus =& ClassRegistry::init('Menus');
	}

	function endTest() {
		unset($this->Menus);
		ClassRegistry::flush();
	}

}
?>