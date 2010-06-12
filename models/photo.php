<?php
class Photo extends AppModel {
	var $name = 'Photo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Media.Transfer','Media.Coupler','Media.Meta');
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
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>