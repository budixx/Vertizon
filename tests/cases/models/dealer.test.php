<?php
/* Dealer Test cases generated on: 2010-09-09 15:09:24 : 1284020004*/
App::import('Model', 'Dealer');

class DealerTestCase extends CakeTestCase {
	var $fixtures = array('app.dealer', 'app.city', 'app.province');

	function startTest() {
		$this->Dealer =& ClassRegistry::init('Dealer');
	}

	function endTest() {
		unset($this->Dealer);
		ClassRegistry::flush();
	}

}
?>