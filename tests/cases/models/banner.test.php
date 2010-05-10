<?php
/* Banner Test cases generated on: 2010-05-06 11:05:21 : 1273120941*/
App::import('Model', 'Banner');

class BannerTestCase extends CakeTestCase {
	var $fixtures = array('app.banner');

	function startTest() {
		$this->Banner =& ClassRegistry::init('Banner');
	}

	function endTest() {
		unset($this->Banner);
		ClassRegistry::flush();
	}

}
?>