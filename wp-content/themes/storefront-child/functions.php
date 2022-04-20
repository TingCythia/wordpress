<?php

add_action('wp','remove_storefront_functions');
function remove_storefront_functions(){
    if (is_checkout()){
        remove_all_actions('storefront_header');

        remove_action('storefront_before_content', 'woocommerce_breadcrumb',10);
        
        remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

        add_action( 'woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

        add_filter('woocommerce_checkout_fields','hj_override_checkout_fields');

        function hj_override_checkout_fields($fields){
            unset(
                $fields['order']['order_comments'],
                $fields['billing']['billing_address_2'], 
                $fields['shipping']['shipping_company'],
            );

            return $fields;
        }

        add_action( 'woocommerce_review_order_after_payment', 'hj_edit_cart_checkout' );

        function hj_edit_cart_checkout(){
            echo '<a href="'.hj_edit_cart_checkout().'"/a>';
        }
    
    }
}
