<?php
/**
 * Plugin Name: WooCommerce Restrict Payment Method
 * Description: Restrict payment method per user on checkout page.
 * Author: GENY
 * Author URI: genyhitch.com
 * Version: 1.0.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace EWA\RestrictPaymentMethod;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'RPM_CUST_PLUGIN_FILE' ) ) {
	define( 'RPM_CUST_PLUGIN_FILE', __FILE__ );
}

require_once 'vendor/autoload.php';

Customization::instance();
