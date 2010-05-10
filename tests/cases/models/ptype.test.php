<?php
/* Ptype Test cases generated on: 2010-05-06 11:05:58 : 1273121038*/
App::import('Model', 'Ptype');

class PtypeTestCase extends CakeTestCase {
	var $fixtures = array('app.ptype', 'app.pbrand', 'app.pcategory', 'app.product');

	function startTest() {
		$this->Ptype =& ClassRegistry::init('Ptype');
	}

	function endTest() {
		unset($this->Ptype);
		ClassRegistry::flush();
	}

}
?>