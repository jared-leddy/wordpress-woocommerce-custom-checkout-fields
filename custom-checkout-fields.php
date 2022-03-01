<?php

add_action( 'woocommerce_after_order_notes', 'carbon_digital_checkout_field' );
function carbon_digital_checkout_field( $checkout ) {
    echo '<div class="carbon_digital_checkout_field"><h3>' . __('Legal Notices') . '</h3>';
    woocommerce_form_field( 'custom-legal-notice-age', array(
        'type'          => 'checkbox',
        'class'         => array('carbon-digital-woocommerce-checkbox form-row-wide'),
        'label'         => __('I attest that I am 18 years of age or older.'),
        'required'   => __('true'),
        ), $checkout->get_value( 'custom-legal-notice-age' ));
    echo '</div>';
}

 ?>
