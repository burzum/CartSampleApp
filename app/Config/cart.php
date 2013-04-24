<?php
$config = array(
	'Cart' => array(
		'models' => array(
			'User' => 'Users.User'
		),
		'defaultCurrency' => 'USD',
		'anonymousCheckout' => false,
		'PaymentMethod' => array(
			'DummyEc' => array(
				'name' => 'Dummy Express Checkout',
				'description' => 'Dummy Express Checkout description',
				'class' => 'EcExample',
				'logo' => '',
				'active' => true,
			)
		)
	)
);
