<?php
/* Contact Test cases generated on: 2010-05-06 11:05:39 : 1273120959*/
App::import('Model', 'Contact');

class ContactTestCase extends CakeTestCase {
	var $fixtures = array('app.contact');

	function startTest() {
		$this->Contact =& ClassRegistry::init('Contact');
	}

	function endTest() {
		unset($this->Contact);
		ClassRegistry::flush();
	}

}
?>