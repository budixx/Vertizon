<?php
/* Ptype Fixture generated on: 2010-05-06 11:05:58 : 1273121038 */
class PtypeFixture extends CakeTestFixture {
	var $name = 'Ptype';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'pbrand_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'pbrand_id' => array('column' => 'pbrand_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'pbrand_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>