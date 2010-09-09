<?php
/* Review Test cases generated on: 2010-09-09 13:09:34 : 1284013714*/
App::import('Model', 'Review');

class ReviewTestCase extends CakeTestCase {
	var $fixtures = array('app.review', 'app.product', 'app.ptype', 'app.pbrand', 'app.pcategory', 'app.photo');

	function startTest() {
		$this->Review =& ClassRegistry::init('Review');
	}

	function endTest() {
		unset($this->Review);
		ClassRegistry::flush();
	}

}
?>