<?php
class Banner extends AppModel {
	var $name = 'Banner';
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
}
?>