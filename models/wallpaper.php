<?php
class Wallpaper extends AppModel {
	var $name = 'Wallpaper';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Size' => array(
			'className' => 'Size',
			'joinTable' => 'wallpapers_sizes',
			'foreignKey' => 'wallpaper_id',
			'associationForeignKey' => 'size_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>