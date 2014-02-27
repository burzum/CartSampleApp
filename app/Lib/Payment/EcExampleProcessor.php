<?php
App::uses('BasePaymentProcessor', 'Payments.Lib/Payment');
App::uses('ExpressCheckoutInterface', 'Payments.Lib/Interface');
App::uses('HttpSocket', 'Network/Http');
/**
 * Ec Example Checkout Processor
 *
 * @author Florian Krämer
 * @copyright 2014 Florian Krämer
 * @license GPLv2
 */
class EcExampleProcessor extends BasePaymentProcessor implements ExpressCheckoutInterface {

/**
 * Checkout
 *
 * @param $controller Controller
 * @param $cart
 * @return void
 */
	public function checkout(Controller $Controller, $cart) {
	}

/**
 * Pay
 *
 * @param $amount
 * @param $options array
 * @return void
 */
	public function pay($amount, array $options = array()) {
	}

/**
 * Refund 
 *
 * @param $paymentReference
 * @param $amount
 * @param $comment string
 * @param $options array
 * @return void
 */
	public function refund($paymentReference, $amount, $comment = '', array $options = array()) {
	}

/**
 * notificationCallback
 *
 * @param $options array
 */
	public function notificationCallback(array $options = array()) {
	}

/**
 * Cancel
 *
 * @param $paymentReference
 * @param $options array
 */
	public function cancel($paymentReference, array $options = array()) {
	}

/**
 * ecInitAndRedirect
 *
 * @param $cart
 * @param $options array
 */
	public function ecInitAndRedirect($cart, $options = array()) {
		$this->redirect(array('plugin' => 'cart', 'admin' => false, 'controller' => 'dummy_controller', 'ec_checkout'));
	}

/**
 * ecRetrieveInfo
 *
 * @param $cart
 * @param $options array
 */
	public function ecRetrieveInfo($cart, $options = array()) {
	}

/**
 * ecProcessPayment
 *
 * @param $cart
 * @param $options array
 */
	public function ecProcessPayment($cart, $options = array()) {
	}

}
