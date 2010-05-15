<?php
/* Menuses Test cases generated on: 2010-05-15 16:05:30 : 1273917570*/
App::import('Controller', 'Menuses');

class TestMenusesController extends MenusesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MenusesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.menus');

	function startTest() {
		$this->Menuses =& new TestMenusesController();
		$this->Menuses->constructClasses();
	}

	function endTest() {
		unset($this->Menuses);
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