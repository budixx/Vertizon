<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Ptype' => array(
			'className' => 'Ptype',
			'foreignKey' => 'ptype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'product_id',
			'dependent' => true,
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