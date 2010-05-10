<?php
/* Pcategory Test cases generated on: 2010-05-06 11:05:28 : 1273121008*/
App::import('Model', 'Pcategory');

class PcategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.pcategory', 'app.pbrand', 'app.ptype');

	function startTest() {
		$this->Pcategory =& ClassRegistry::init('Pcategory');
	}

	function endTest() {
		unset($this->Pcategory);
		ClassRegistry::flush();
	}

}
?>