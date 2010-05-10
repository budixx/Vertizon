<?php
/* Banner Fixture generated on: 2010-05-06 11:05:21 : 1273120941 */
class BannerFixture extends CakeTestFixture {
	var $name = 'Banner';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'image' => array('type' => 'string', 'null' => false, 'default' => 'NULL'),
		'link' => array('type' => 'string', 'null' => false, 'default' => 'NULL'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'image' => 'Lorem ipsum dolor sit amet',
			'link' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>