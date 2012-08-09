<?php
class InitialMigration extends CakeMigration {

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
			'create_table' => array(
				'items' => array(
						'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'default' => NULL, 'key' => 'primary'),
						'user_id' => array('type' => 'string', 'null' => false, 'length' => 36, 'default' => NULL),
						'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
						'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
						'currency' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3),
						'price' => array('type' => 'float', 'null' => false, 'default' => NULL),
						'downloadable' => array('type' => 'boolean', 'null' => false, 'default' => 0),
						'quantity' => array('type' => 'integer', 'null' => false, 'default' => 0, 'length' => 8),
						'max_quantity' => array('type' => 'integer', 'null' => false, 'default' => 0, 'length' => 8),
						'min_quantity' => array('type' => 'integer', 'null' => false, 'default' => 0, 'length' => 8),
						'for_sale' => array('type' => 'boolean', 'null' => false, 'default' => 0),
						'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
						'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
						'indexes' => array(
							'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'items'),
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
		return true;
	}
}
