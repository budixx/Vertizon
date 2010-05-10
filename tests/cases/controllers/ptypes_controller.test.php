<?php
/* Ptypes Test cases generated on: 2010-05-06 11:05:06 : 1273121286*/
App::import('Controller', 'Ptypes');

class TestPtypesController extends PtypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PtypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ptype', 'app.pbrand', 'app.pcategory', 'app.product');

	function startTest() {
		$this->Ptypes =& new TestPtypesController();
		$this->Ptypes->constructClasses();
	}

	function endTest() {
		unset($this->Ptypes);
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