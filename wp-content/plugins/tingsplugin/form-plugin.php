<?php
/**
 * Plugin name: Form Plugin
 * 
 */


add_action('wp_ajax_skicka-form', 'skriv_ut_banan');

function skriv_ut_banan(){
    echo "test ajaxbanan";

    echo $_REQUEST['firstname'];
    echo $_REQUEST['lastname'];


}