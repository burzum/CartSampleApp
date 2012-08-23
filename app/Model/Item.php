<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 * @author Florian Krämer
 * @copyright 2012 Florian Krämer
 * @license GPLv2
 *
 * @property User $User
 */
class Item extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'Cart.Buyable');

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'Users.User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * 
 */
	public function beforeAddToCart() {

		//return false;
	}

}
