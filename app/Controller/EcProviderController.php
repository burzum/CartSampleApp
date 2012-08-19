<?php
App::uses('AppController', 'Controller');
/**
 * Controller to simulate an Express Checkout Provider like Paypal
 */
class EcProviderController extends AppController {
/**
 * 
 */
	public $uses = array(
		'EcProvider',
		'EcTransaction');

/**
 * 
 */
	public function begin_checkout() {
		if (!$this->request->is('post')) {
			$this->log($this->request->data);
		}

	}

/**
 * 
 */
	public function confirm_checkout() {
		
	}

/**
 * 
 */
	public function finish_checkout() {
		
	}

}