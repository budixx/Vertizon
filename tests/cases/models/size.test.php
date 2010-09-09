<?php
/* Size Test cases generated on: 2010-09-09 15:09:10 : 1284019750*/
App::import('Model', 'Size');

class SizeTestCase extends CakeTestCase {
	var $fixtures = array('app.size', 'app.wallpaper', 'app.wallpapers_size');

	function startTest() {
		$this->Size =& ClassRegistry::init('Size');
	}

	function endTest() {
		unset($this->Size);
		ClassRegistry::flush();
	}

}
?>