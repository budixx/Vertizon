<?php
/* Type Test cases generated on: 2010-05-06 11:05:21 : 1273121061*/
App::import('Model', 'Type');

class TypeTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.content');

	function startTest() {
		$this->Type =& ClassRegistry::init('Type');
	}

	function endTest() {
		unset($this->Type);
		ClassRegistry::flush();
	}

}
?>