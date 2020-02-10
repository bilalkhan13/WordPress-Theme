<?php

/**
 * Functions.php
 * PHP Version 7.2.24
 * @category  Components
 * @package   Wordpress
 * @author    Bilal Ahmad Khan <bilalahmad.nts@gmail.com>
 * @copyright 2020 Bilal Ahmad Khan
 * @license   Licence Name
 * @version   GIT: @1.0.0@
 * @link      localhost
 * @see       Link to project website
 * @return    mixed
 */
/*Theme Support*/
function bilal_theme_setup()
{
    /*Custom Logo*/
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 60,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    /*Title-Tag*/
    add_theme_support('title-tag');

    /*Feed*/
    add_theme_support('automatic-feed-links');

    /*Featured-Image*/
    add_theme_support('post-thumbnails');

    /*Post Image Size */
    add_image_size('home-featured', 640, 400, array('center','center'));

    /*Menu Panel*/
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'wplearning'),
        'secondary' => __('Secondary Menu', 'wplearning')
    ));
    $args = array(
        'default-image'=> get_template_directory_uri().'/assets/img/header-1.png',
        'default-text-color'      => '000',
        'width'        => 1920,
        'height'       => 400,
        'flex-width'   => true,
        'flex-height'  => true,
    );
    add_theme_support('custom-header', $args);
};
add_action('after_setup_theme', 'bilal_theme_setup');

  
/*Include Style Sheet and Scripts || Hook */
function bilal_theme_scripts()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css'); /* Bootstrap add before our file*/
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
} /* Unique Name set if our inset multiple Sheets*/

/*Run Hook Location*/
add_action('wp_enqueue_scripts', 'bilal_theme_scripts'); /* S */
/*Rehister Sidebar || id Unique*/
function bilal_widgets_init()
{
    /*Sidebar Widget*/
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'theme_name'),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    /*Footer Widget*/
    register_sidebar(array(
        'name'          => __('Footer Widget', 'theme_name'),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'theme_name'),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 3', 'theme_name'),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'bilal_widgets_init');
//Include Customizer
require get_template_directory().'/inc/customizer.php';
//Include Custom Post Types
require get_template_directory().'/inc/services.php';
