<?php
/* Wallpaper Fixture generated on: 2010-09-09 15:09:54 : 1284019734 */
class WallpaperFixture extends CakeTestFixture {
	var $name = 'Wallpaper';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'file' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'dirname' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'basename' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'checksum' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'file' => 'Lorem ipsum dolor sit amet',
			'dirname' => 'Lorem ipsum dolor sit amet',
			'basename' => 'Lorem ipsum dolor sit amet',
			'checksum' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-09-09 15:08:54',
			'modified' => '2010-09-09 15:08:54'
		),
	);
}
?>