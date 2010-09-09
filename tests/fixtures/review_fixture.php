<?php
/* Review Fixture generated on: 2010-09-09 13:09:34 : 1284013714 */
class ReviewFixture extends CakeTestFixture {
	var $name = 'Review';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'desc' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
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
			'product_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'desc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date' => '2010-09-09 13:28:34',
			'file' => 'Lorem ipsum dolor sit amet',
			'dirname' => 'Lorem ipsum dolor sit amet',
			'basename' => 'Lorem ipsum dolor sit amet',
			'checksum' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-09-09 13:28:34',
			'modified' => '2010-09-09 13:28:34'
		),
	);
}
?>