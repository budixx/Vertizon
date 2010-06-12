<?php
/* Newsletters Test cases generated on: 2010-06-12 16:06:41 : 1276334621*/
App::import('Controller', 'Newsletters');

class TestNewslettersController extends NewslettersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NewslettersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.newsletter');

	function startTest() {
		$this->Newsletters =& new TestNewslettersController();
		$this->Newsletters->constructClasses();
	}

	function endTest() {
		unset($this->Newsletters);
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