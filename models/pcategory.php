<?php
class Pcategory extends AppModel {
	var $name = 'Pcategory';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Pbrand' => array(
			'className' => 'Pbrand',
			'foreignKey' => 'pcategory_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>