<?php
App::uses('AppController', 'Controller');
/**
 * Controller to simulate an Express Checkout Provider like Paypal
 */
class EcProviderController extends AppController {

/**
 * Uses
 *
 * @var array
 */
	public $uses = array(
		'EcProvider',
		'EcTransaction');

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'Session');

/**
 * Login
 *
 * @return void
 */
	public function login() {
		if (!empty($this->request->data)) {
			$this->Session->write('EcProvider.data', $this->request->data);
			$transactionId = md5(microtime());
			$this->Session->write('EcProvider.transactionId', $transactionId);
		}
	}

/**
 * Begin Checkout
 *
 * @return void
 */
	public function begin_checkout() {
		if (!$this->request->is('post')) {
			$this->log($this->request->data);
		}
	}

/**
 * Confirm Checkout
 */
	public function confirm_checkout() {
	}

/**
 * Finish Checkout Process
 */
	public function finish_checkout() {
	}

}