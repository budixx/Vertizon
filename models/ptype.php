<?php
class Ptype extends AppModel {
	var $name = 'Ptype';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Pbrand' => array(
			'className' => 'Pbrand',
			'foreignKey' => 'pbrand_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'ptype_id',
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