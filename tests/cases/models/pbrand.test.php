<?php
/* Pbrand Test cases generated on: 2010-05-06 11:05:20 : 1273121000*/
App::import('Model', 'Pbrand');

class PbrandTestCase extends CakeTestCase {
	var $fixtures = array('app.pbrand', 'app.pcategory', 'app.ptype');

	function startTest() {
		$this->Pbrand =& ClassRegistry::init('Pbrand');
	}

	function endTest() {
		unset($this->Pbrand);
		ClassRegistry::flush();
	}

}
?>