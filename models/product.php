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
}
?>