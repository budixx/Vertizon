<?php
/* Sizes Test cases generated on: 2010-09-09 15:09:32 : 1284019772*/
App::import('Controller', 'Sizes');

class TestSizesController extends SizesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SizesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.size', 'app.wallpaper', 'app.wallpapers_size');

	function startTest() {
		$this->Sizes =& new TestSizesController();
		$this->Sizes->constructClasses();
	}

	function endTest() {
		unset($this->Sizes);
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