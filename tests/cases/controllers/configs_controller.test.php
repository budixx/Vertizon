<?php
/* Configs Test cases generated on: 2010-09-09 14:09:51 : 1284017451*/
App::import('Controller', 'Configs');

class TestConfigsController extends ConfigsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ConfigsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.config');

	function startTest() {
		$this->Configs =& new TestConfigsController();
		$this->Configs->constructClasses();
	}

	function endTest() {
		unset($this->Configs);
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