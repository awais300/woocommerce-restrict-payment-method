<?php

namespace EWA\RestrictPaymentMethod;

defined( 'ABSPATH' ) || exit;

/**
 * Class Checkout
 * @package EWA\RestrictPaymentMethod
 */

class Checkout {

	public function __construct() {
		add_filter( 'woocommerce_available_payment_gateways', array( $this, 'disable_payment_method_for_users' ) );

	}

	public function disable_payment_method_for_users( $available_gateways ) {
		if ( is_admin() ) {
			return $available_gateways;
		}

		if ( $user_id = get_current_user_id() ) {

			$restricted_payment_method = get_user_meta( $user_id, 'geny_restrict_payment_method', true );

			if ( empty( $restricted_payment_method ) ) {
				return $available_gateways;
			}

			if ( $restricted_payment_method == 'paylater' ) {
				if ( isset( $available_gateways['cheque'] ) ) {
					unset( $available_gateways['cheque'] );
				}
			}

			if ( $restricted_payment_method == 'creditcard' ) {
				if ( isset( $available_gateways['braintree_credit_card'] ) ) {
					unset( $available_gateways['braintree_credit_card'] );
				}
			}
		}

		return $available_gateways;
	}
}
