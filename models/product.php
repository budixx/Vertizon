<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Media.Transfer','Media.Coupler','Media.Meta','Searchable.Searchable');
	var $validate = array(
		'file' => array(
			'mimeType' => array(
				'rule' => array('checkMimeType', false, array ( 'image/jpeg', 'image/png','image/gif')),
				'message' => 'Allowed files is jpeg,png or gif'
				),
		'size' => array(
			'rule' => array('checkSize' , '1M'),
			'message' => 'Max size is 1M'
		)
	));

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