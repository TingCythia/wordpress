<?php
/**
 * Plugin name: Signup Form Plugin
 * 
 * version:1.0
 */


add_action('wp_ajax_send-form', 'write_form');

function write_form(){
    

    echo $_REQUEST['name'];
    echo $_REQUEST['email'];
    echo $_REQUEST['pass'];
    echo $_REQUEST['re_pass'];

    
}
        
echo "Your informtion has registered";