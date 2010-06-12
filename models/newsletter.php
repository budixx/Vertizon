<?php
class Newsletter extends AppModel {
	var $name = 'Newsletter';
	var $validate = array(
		'email' => array(
			'email' => array(
				'rule' => 'email'
			),
			'unique' => array(
				'rule' => 'isUnique'
			)
		)
	);
}
?>