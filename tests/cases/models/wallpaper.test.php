<?php
/* Wallpaper Test cases generated on: 2010-09-09 15:09:54 : 1284019734*/
App::import('Model', 'Wallpaper');

class WallpaperTestCase extends CakeTestCase {
	var $fixtures = array('app.wallpaper', 'app.size', 'app.wallpapers_size');

	function startTest() {
		$this->Wallpaper =& ClassRegistry::init('Wallpaper');
	}

	function endTest() {
		unset($this->Wallpaper);
		ClassRegistry::flush();
	}

}
?>