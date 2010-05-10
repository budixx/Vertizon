<?php
/* Pbrands Test cases generated on: 2010-05-06 11:05:46 : 1273121206*/
App::import('Controller', 'Pbrands');

class TestPbrandsController extends PbrandsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PbrandsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pbrand', 'app.pcategory', 'app.ptype', 'app.product');

	function startTest() {
		$this->Pbrands =& new TestPbrandsController();
		$this->Pbrands->constructClasses();
	}

	function endTest() {
		unset($this->Pbrands);
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