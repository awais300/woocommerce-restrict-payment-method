<?php

namespace EWA\RestrictPaymentMethod;

defined( 'ABSPATH' ) || exit;

/**
 * Class User
 * @package EWA\RestrictPaymentMethod
 */

class User {

	protected $loader = null;

	public function __construct() {
		$this->loader = TemplateLoader::get_instance();
		add_filter( 'user_contactmethods', array( $this, 'payment_method_fields' ), 10, 1 );
		add_action( 'edit_user_profile_update', array( $this, 'save_payment_method_fields' ) );
	}

	public function payment_method_fields( $methods ) {

		if ( ! current_user_can( 'manage_options' ) ) {
			return $methods;
		}

		$data = array(
			'select_options' => array(
				''           => __( '--Select--', 'rpm-customization' ),
				'paylater'   => __( 'Pay Later, Invoice to my account', 'rpm-customization' ),
				'creditcard' => __( 'Credit Card / Cash in advance', 'rpm-customization' ),
			),
		);

		$content = $this->loader->get_template(
			'admin/user.php',
			$data,
			RPM_CUST_PLUGIN_DIR_PATH . '/templates/',
			true
		);

		return array();
	}

	public function save_payment_method_fields() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return false;
		}

		if ( isset( $_POST['user_id'] ) & is_admin() ) {
			update_user_meta( $_POST['user_id'], 'geny_restrict_payment_method', $_POST['geny_restrict_payment_method'] );
		}

	}
}
