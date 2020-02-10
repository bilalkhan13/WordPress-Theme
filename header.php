<?php
/**
 * Header.php
 * PHP Version 7.2.24
 * @category  Components
 * @package   Wordpress
 * @author    Bilal Ahmad Khan <bilalahmad.nts@gmail.com>
 * @copyright 2020 Bilal Ahmad Khan
 * @license   Licence Name
 * @version   GIT: @1.0.0@
 * @link      localhost
 * @see       Link to project website
 */
?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <?php wp_head()?>
    <style type="text/css">
        body{
            background: <?php echo get_theme_mod('wplearning_body_bg_color', '#fff')?>
        }
        .site-navigation{
            background: <?php echo get_theme_mod('wplearning_nav_bg_color', '#2ca358')?>
        }
    </style>
</head>
<body>
<div class="site-main container"> <!-- close in footer-->
    <header class="site-header">
        <div class="site-branding">
            <?php the_custom_logo() ?>
        </div>
    </header>
    <nav class="site-navigation">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary'
        ));
        ?>
    </nav>

<!-- <script type="text/javascript">
jQuery(document).ready(function($){
$("img").fadeOut();
});
</script> -->