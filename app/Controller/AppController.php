<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'fields' => array(
						'username' => 'email',
						'password' => 'password'),
					'userModel' => 'Users.User',
					'scope' => array(
						'User.active' => 1,
						'User.email_verified' => 1)))),
		'DebugKit.Toolbar',
		'Cart.CartManager');

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Cart.Cart');

/**
 * beforeFilter
 *
 * @return void
 */
	public function beforeFilter() {
		$this->set('title_for_layout', __('Cart Sample Application'));
		$this->_setupAuth();
		$this->set('userData', $this->Auth->user());
	}

/**
 * Setup Authentication Component
 *
 * @return void
 */
	protected function _setupAuth() {
		if (!is_null(Configure::read('Users.allowRegistration')) && !Configure::read('Users.allowRegistration')) {
			$this->Auth->deny('add');
		}
		if ($this->request->action == 'register') {
			$this->Components->disable('Auth');
		}

		if ($this->request->action == 'login') {
			$this->Auth->autoRedirect = false;
		}

		$this->Auth->loginRedirect = '/';
		$this->Auth->logoutRedirect = array('plugin' => 'users', 'controller' => 'users', 'action' => 'login');
		$this->Auth->loginAction = array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'login');
	}

}
