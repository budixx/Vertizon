<?php
class Pbrand extends AppModel {
	var $name = 'Pbrand';
	var $displayField = 'name';
	var $actsAs = array('Media.Transfer','Media.Coupler','Media.Meta');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Pcategory' => array(
			'className' => 'Pcategory',
			'foreignKey' => 'pcategory_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Ptype' => array(
			'className' => 'Ptype',
			'foreignKey' => 'pbrand_id',
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