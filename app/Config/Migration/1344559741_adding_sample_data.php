<?php
class AddingSampleData extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		if ($direction == 'up') {
			$this->addSampleItems();
			$this->addSampleUsers();
		}

		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		if ($direction == 'down') {
			ClassRegistry::init('Item')->deleteAll(array('1 = 1'));
			ClassRegistry::init('Users.User')->deleteAll(array('1 = 1'));
		}

		return true;
	}

/**
 * Adding sample items to the application
 *
 * @return void
 */
	public function addSampleItems() {
		$Item = ClassRegistry::init('Item');

		$items = array(
			array(
				'name' => 'Eizo S2431W',
				'description' => 'Eizo Displays rock!',
				'downloadable' => 0,
				'currency' => 'EUR',
				'price' => 719.98,
				'for_sale' => 1),
			array(
				'name' => 'Piece of Cake',
				'description' => 'Just a piece of it.',
				'downloadable' => 1,
				'currency' => 'EUR',
				'price' => 0.99,
				'for_sale' => 1),
			array(
				'name' => 'Failcode',
				'description' => 'It is broken!',
				'downloadable' => 1,
				'currency' => 'EUR',
				'price' => 0.09,
				'for_sale' => 0),
			array(
				'name' => 'CakePHP',
				'description' => 'Best Framework ever!',
				'downloadable' => 1,
				'currency' => 'EUR',
				'price' => 9999999.00,
				'for_sale' => 1),
		);

		$i = 1;
		foreach ($items as $item) {
			$item['id'] = 'item-' . $i;
			$item['user_id'] = 'user-1';

			$Item->create();
			$Item->save($item);
			$i++;
		}
	}

/**
 * Adding sample users to the application
 *
 * @return void
 */
	public function addSampleUsers() {
		$User = ClassRegistry::init('Users.User');

		$User->create();
		$User->save(
			array(
				'id' => 'user-1',
				'username' => 'admin',
				'email' => 'admin@samplecart.com',
				'active' => 1,
				'email_verified' => 1,
				'tos' => 1,
				'role' => 'admin',
				'password' => Security::hash('password', null, true),
			array(
				'validate' => false,
				'callbacks' => false)));

		$User->create();
		$User->save(
				array(
					'id' => 'user-2',
					'username' => 'customer',
					'email' => 'customer@samplecart.com',
					'active' => 1,
					'email_verified' => 1,
					'tos' => 1,
					'role' => 'customer',
					'password' => Security::hash('password', null, true),
				array(
					'validate' => false,
					'callbacks' => false)));
	}

}
