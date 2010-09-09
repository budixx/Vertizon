<?php
/* Wallpapers Test cases generated on: 2010-09-09 15:09:20 : 1284019760*/
App::import('Controller', 'Wallpapers');

class TestWallpapersController extends WallpapersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WallpapersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.wallpaper', 'app.size', 'app.wallpapers_size');

	function startTest() {
		$this->Wallpapers =& new TestWallpapersController();
		$this->Wallpapers->constructClasses();
	}

	function endTest() {
		unset($this->Wallpapers);
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