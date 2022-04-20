<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css';?>">
</head>
<body>

<article>
<?php
/**
 * Main template file
 * 
 * @package TingsThemes
 */
get_header();
?>

<?php
while(have_posts()){
    the_post(); ?>
    <h1>
    <!--WP Inlägg-->
    <?php the_title();
    ?>
    <!--#WP Inlägg-->
    </h1>
    <p>
     <?php the_content();
     echo "Hello"?>
    </p>
<?php } ?>

<img src="<?php echo get_template_directory_uri().'/Ocean.jpg';?>">

</article>

<?php 

get_footer();
?>
</body>
</html>