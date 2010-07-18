<?php
class Contact extends AppModel {
	var $name = 'Contact';
	
	var $validate = array(
		'name' => array(
			'required' => array(
				'rule' => 'notEmpty',
				'message' => 'Please fill your name.'
			)
		),
		'email' => array(
			'email' => array(
				'rule' => 'email',
				'message' => 'Your email is not valid'
			),
			'required' => array(
				'rule' => 'notEmpty',
				'message' => 'Please fill your email.'
			)
		),
		'message' => array(
			'required' => array(
				'rule' => 'notEmpty',
				'message' => 'Please fill your message.'
			)
		)
	);
}
?>