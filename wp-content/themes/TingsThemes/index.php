<?php
/**
 * Main template file
 * 
 * @package TingsThemes
 */
get_header();
?>

<?php add_image_size('gallery_storlek', 250, 250, true )?>

<div class="content">

<?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        //the_excerpt();
        the_content();
     /*    $text_h1_filtrerad=apply_filters('the_content');
        echo $text_h1_filtrerad; */

        get_template_part( 'template-parts/content/home', get_post_type() );

        get_the_post_thumbnail('gallery_storlek');
    }
}

?>

<!-- #site-content -->
</div>
<h2>Filter Demo</h2>

<?php $text_var="Filter test";
echo $text_var;
$text_var_filtrerad = apply_filters('ett_filter', $text_var);
echo $text_var_filtrerad; 
?>

<?php 

get_footer();
/*  <?php
while(have_posts()){
    the_post();
    the_title();
    the_content();
}
?>  */

