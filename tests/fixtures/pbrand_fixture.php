<?php
/* Pbrand Fixture generated on: 2010-05-06 11:05:20 : 1273121000 */
class PbrandFixture extends CakeTestFixture {
	var $name = 'Pbrand';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pcategory_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'pcategory_id' => array('column' => 'pcategory_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'pcategory_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>