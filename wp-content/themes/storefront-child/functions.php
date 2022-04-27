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

add_action('rest_api_init', function () {
    register_rest_route( 'mystorefronttheme/v1', 'latest-posts/(?P<category_id>\d+)',array(
                  'methods'  => 'GET',
                  'callback' => 'get_latest_posts_by_category'
        ));
  });

// Increase WooCommerce Variation Limit
function custom_wc_ajax_variation_threshold( $qty, $product ) {
    return 100;
    }
    
    add_filter( 'woocommerce_ajax_variation_threshold', 'custom_wc_ajax_variation_threshold', 100, 2 );