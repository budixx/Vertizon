<?php
/* Config Test cases generated on: 2010-09-09 14:09:38 : 1284017438*/
App::import('Model', 'Config');

class ConfigTestCase extends CakeTestCase {
	var $fixtures = array('app.config');

	function startTest() {
		$this->Config =& ClassRegistry::init('Config');
	}

	function endTest() {
		unset($this->Config);
		ClassRegistry::flush();
	}

}
?>