<?php

/**
 * Customizer.php
 * PHP Version 7.2.24
 * @category  Components
 * @package   Wordpress
 * @author    wplearning Ahmad Khan <wplearningahmad.nts@gmail.com>
 * @copyright 2020 wplearning Ahmad Khan
 * @license   Licence Name
 * @version   GIT: @1.0.0@
 * @link      localhost
 * @see       Link to project website
 * @return    mixed
 */
function wplearning_customize_register($wp_customize)
{
    $wp_customize->add_panel('wplearning_settings', array(
        'title' => _('Bilal Settings'),
        'description' => '',//include html tags such as <p>
        'priority' => 10, //Mixed with top-level-section hierarchy.
    ));
    $wp_customize->add_section('wplearning_colors', array(
        'title' => 'Colors',
        'panel' => 'wplearning_settings',
    ));
    /*control and panel id same || must it */
    $wp_customize->add_setting('wplearning_nav_bg_color', array(
        'type' => 'theme_mod', //or 'option'
        'capability' => 'edit_theme_options',
        'default'    => '#2ca358',
        'transport'  => 'refresh', //or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control('wplearning_nav_bg_color', array(
        'label' => _('Menu Background'),
        'type' => 'color',
        'section' => 'wplearning_colors',
    ));
    /*Copyyyyy */
    $wp_customize->add_setting('wplearning_body_bg_color', array(
        'type' => 'theme_mod', //or 'option'
        'capability' => 'edit_theme_options',
        'default'    => '#fff',
        'transport'  => 'refresh', //or postMessage
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control('wplearning_body_bg_color', array(
        'label' => _('Body Background'),
        'type' => 'color',
        'section' => 'wplearning_colors',
    ));
    /*Copyyyyy  for Label*/
    $wp_customize->add_section('wplearning_labels', array(
        'title' => 'Labels',
        'panel' => 'wplearning_settings',
    ));
    $wp_customize->add_setting('wplearning_featured_block_1', array(
        'type' => 'theme_mod', //or 'option'
        'capability' => 'edit_theme_options',
        'default'    => 'Latest from Technology',
        'transport'  => 'refresh', //or postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('wplearning_featured_block_1', array(
        'label' => _('Featured Box 1 Title'),
        'type' => 'text',
        'section' => 'wplearning_labels',
    ));
    /**Copy */
    $wp_customize->add_setting('wplearning_featured_block_2', array(
        'type' => 'theme_mod', //or 'option'
        'capability' => 'edit_theme_options',
        'default'    => 'Latest from Social Media',
        'transport'  => 'refresh', //or postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('wplearning_featured_block_2', array(
        'label' => _('Featured Box 2 Title'),
        'type' => 'text',
        'section' => 'wplearning_labels',
    ));
    /**Home Banner */
    $wp_customize->add_section('wplearning_misc', array(
        'title' => 'Misc Setting',
        'panel' => 'wplearning_settings',
    ));
    $wp_customize->add_setting('wplearning_home_banner', array(
        'type' => 'theme_mod', //or 'option'
        'capability' => 'edit_theme_options',
        'default'    => 'Yes',
        'transport'  => 'refresh', //or postMessage
        'sanitize_callback' => 'esc_attr',
    ));
    $wp_customize->add_control('wplearning_home_banner', array(
        'label' => _('Show/Hide Home Banner'),
        'type' => 'radio',
        'section' => 'wplearning_misc',
        'choices' =>array(
            'Yes' => 'Yes',
            'No'  => 'No'
        )
    ));
}
add_action('customize_register', 'wplearning_customize_register');
