<?php
App::uses('BasePaymentProcessor', 'Cart.Lib/Payment');
App::uses('HttpSocket', 'Network/Http');
/**
 * Ec Example Checkout Processor
 *
 * @author Florian Krämer
 * @copyright 2012 Florian Krämer
 * @license MIT
 */
class EcExampleProcessor extends BasePaymentProcessor implements ExpressCheckoutInterface {
/**
 * 
 */
	public function checkout(Controller $Controller, $cart) {
		
	}

/**
 * 
 */
	public function ecInitAndRedirect($cart, $options = array()) {
		$this->redirect(array('plugin' => 'cart', 'admin' => false, 'controller' => 'dummy_controller', 'ec_checkout'));
	}

/**
 * 
 */
	public function ecRetrieveInfo($cart, $options = array()) {
		
	}

/**
 * 
 */
	public function ecProcessPayment($cart, $options = array()) {
		
	}

}