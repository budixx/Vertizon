<?php
/* Dealers Test cases generated on: 2010-09-09 15:09:56 : 1284020036*/
App::import('Controller', 'Dealers');

class TestDealersController extends DealersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DealersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dealer', 'app.city', 'app.province');

	function startTest() {
		$this->Dealers =& new TestDealersController();
		$this->Dealers->constructClasses();
	}

	function endTest() {
		unset($this->Dealers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>