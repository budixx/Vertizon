<?php
/* Banners Test cases generated on: 2010-05-04 19:05:11 : 1272977831*/
App::import('Controller', 'Banners');

class TestBannersController extends BannersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BannersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.banner');

	function startTest() {
		$this->Banners =& new TestBannersController();
		$this->Banners->constructClasses();
	}

	function endTest() {
		unset($this->Banners);
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