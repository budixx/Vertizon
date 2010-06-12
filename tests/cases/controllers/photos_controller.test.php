<?php
/* Photos Test cases generated on: 2010-06-12 16:06:49 : 1276333309*/
App::import('Controller', 'Photos');

class TestPhotosController extends PhotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PhotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.photo', 'app.product', 'app.ptype', 'app.pbrand', 'app.pcategory');

	function startTest() {
		$this->Photos =& new TestPhotosController();
		$this->Photos->constructClasses();
	}

	function endTest() {
		unset($this->Photos);
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