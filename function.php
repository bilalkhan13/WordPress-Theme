<?php

/**
 * Function.php
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
