<?php
class Review extends AppModel {
	var $name = 'Review';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Media.Transfer','Media.Coupler','Media.Meta','Searchable.Searchable','Sluggable' => array('separator' => '-','overwrite' => true,'label' => 'title'));
	var $validate = array(
		'file' => array(
			'resource' => array(
				'rule' => 'checkResource',
				'allowEmpty' => false,
				'message' => 'Please upload the file'
			),
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