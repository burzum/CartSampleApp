<?php
App::uses('BasePaymentProcessor', 'Payments.Lib/Payment');
App::uses('ExpressCheckoutInterface', 'Payments.Lib/Interface');
App::uses('HttpSocket', 'Network/Http');
/**
 * Ec Example Checkout Processor
 *
 * @author Florian Krämer
 * @copyright 2012 Florian Krämer
 * @license GPLv2
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
	public function pay($amount, array $options = array()) {

	}

/**
 *
 */
	public function refund($paymentReference, $amount, $comment = '', array $options = array()) {
		
	}

/**
 *
 */
	public function notificationCallback(array $options = array()) {

	}

/**
 *
 */
	public function cancel($paymentReference, array $options = array()) {

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