<?php
/* Content Test cases generated on: 2010-05-06 11:05:58 : 1273120978*/
App::import('Model', 'Content');

class ContentTestCase extends CakeTestCase {
	var $fixtures = array('app.content', 'app.type');

	function startTest() {
		$this->Content =& ClassRegistry::init('Content');
	}

	function endTest() {
		unset($this->Content);
		ClassRegistry::flush();
	}

}
?>