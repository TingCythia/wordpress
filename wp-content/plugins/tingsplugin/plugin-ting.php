<?php 
/*
* Plugin name :Tings plugins
*/
 // Säkert
  
 // Aktivering
 
 //Funktioner för book CPT


 add_action('init','register_book');
 function register_book(){

    $book_args = [
        'public' => true,
        'label' => 'Book',
    ];
 register_post_type('book', $book_args);
 }

 ?>