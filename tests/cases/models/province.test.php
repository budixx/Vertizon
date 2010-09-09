<?php
/* Province Test cases generated on: 2010-09-09 15:09:33 : 1284020013*/
App::import('Model', 'Province');

class ProvinceTestCase extends CakeTestCase {
	var $fixtures = array('app.province', 'app.city', 'app.dealer');

	function startTest() {
		$this->Province =& ClassRegistry::init('Province');
	}

	function endTest() {
		unset($this->Province);
		ClassRegistry::flush();
	}

}
?>