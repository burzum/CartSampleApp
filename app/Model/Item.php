<?php
App::uses('AppModel', 'Model');
App::uses('NotBuyableException', 'Cart.Lib/Error');
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
 * This method will determine if the item is buyable or not and by this can be added to the cart or not
 *
 * @param array $data
 * @return boolean
 */
	public function isBuyable($data) {
		$result = $this->find('first', array(
			'contain' => array(),
			'conditions' => array(
				$this->alias . '.' . $this->primaryKey => $data['CartsItem']['foreign_key'])));

		if (!empty($result)) {
			if ($data['CartsItem']['quantity'] > $result[$this->alias]['quantity']) {
				return false;
			}

			if ($result[$this->alias]['max_quantity'] > 0 && $data['CartsItem']['quantity'] >= $result[$this->alias]['max_quantity']) {
				return false;
			}

			if ($result[$this->alias]['min_quantity'] > 0 && $data['CartsItem']['quantity'] <= $result[$this->alias]['min_quantity']) {
				return false;
			}

			return $result[$this->alias]['for_sale'] == 1 && $result[$this->alias]['quantity'] > 0;
		}

		return false;
	}
}
