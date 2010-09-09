<?php
class Size extends AppModel {
	var $name = 'Size';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Wallpaper' => array(
			'className' => 'Wallpaper',
			'joinTable' => 'wallpapers_sizes',
			'foreignKey' => 'size_id',
			'associationForeignKey' => 'wallpaper_id',
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