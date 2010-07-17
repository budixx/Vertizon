<?php
class Content extends AppModel {
	var $name = 'Content';
	var $displayField = 'title';
	var $actsAs = array('Searchable.Searchable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>