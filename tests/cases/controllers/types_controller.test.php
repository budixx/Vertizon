<?php
/* Types Test cases generated on: 2010-05-06 11:05:15 : 1273121295*/
App::import('Controller', 'Types');

class TestTypesController extends TypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.content');

	function startTest() {
		$this->Types =& new TestTypesController();
		$this->Types->constructClasses();
	}

	function endTest() {
		unset($this->Types);
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