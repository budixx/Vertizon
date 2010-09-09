<?php
/* Reviews Test cases generated on: 2010-09-09 13:09:04 : 1284013744*/
App::import('Controller', 'Reviews');

class TestReviewsController extends ReviewsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReviewsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.review', 'app.product', 'app.ptype', 'app.pbrand', 'app.pcategory', 'app.photo');

	function startTest() {
		$this->Reviews =& new TestReviewsController();
		$this->Reviews->constructClasses();
	}

	function endTest() {
		unset($this->Reviews);
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