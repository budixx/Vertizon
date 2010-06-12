<?php
/* Featureds Test cases generated on: 2010-06-12 12:06:06 : 1276320486*/
App::import('Controller', 'Featureds');

class TestFeaturedsController extends FeaturedsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FeaturedsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.featured');

	function startTest() {
		$this->Featureds =& new TestFeaturedsController();
		$this->Featureds->constructClasses();
	}

	function endTest() {
		unset($this->Featureds);
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