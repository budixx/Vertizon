<?php
class Pcategory extends AppModel {
	var $name = 'Pcategory';
	var $displayField = 'name';
	var $actsAs = array('Media.Transfer','Media.Coupler','Media.Meta','Sluggable' => array('separator' => '-','overwrite' => true,'label' => 'name'));
	//The Associations below have been created with all possible keys, those that are not needed can be removed
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