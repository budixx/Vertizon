<?php
/* Pcategories Test cases generated on: 2010-05-06 11:05:56 : 1273121216*/
App::import('Controller', 'Pcategories');

class TestPcategoriesController extends PcategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PcategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pcategory', 'app.pbrand', 'app.ptype', 'app.product');

	function startTest() {
		$this->Pcategories =& new TestPcategoriesController();
		$this->Pcategories->constructClasses();
	}

	function endTest() {
		unset($this->Pcategories);
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