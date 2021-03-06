<?php
/**
 * Credit Card - Plain email instructions.
 *
 * @author  Claudio_Sanches
 * @package Iugu_WooCommerce/Templates
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

esc_html_e( 'Payment', 'iugu-woocommerce' );

echo "\n\n";

/* translators: %s: instalments */
echo esc_html( sprintf( __( 'Payment successfully made using credit card in %s.', 'iugu-woocommerce' ), $installments . 'x' ) );

echo "\n\n****************************************************\n\n";
