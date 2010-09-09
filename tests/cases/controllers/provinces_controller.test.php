<?php
/* Provinces Test cases generated on: 2010-09-09 15:09:51 : 1284020031*/
App::import('Controller', 'Provinces');

class TestProvincesController extends ProvincesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvincesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.province', 'app.city', 'app.dealer');

	function startTest() {
		$this->Provinces =& new TestProvincesController();
		$this->Provinces->constructClasses();
	}

	function endTest() {
		unset($this->Provinces);
		ClassRegistry::flush();
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