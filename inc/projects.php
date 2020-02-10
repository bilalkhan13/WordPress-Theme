<?php
/**  Register Custom Post Type owl*/
function create_owl_cpt()
{

    $labels = array(
    'name' => _x('owls', 'Post Type General Name', 'textdomain'),
    'singular_name' => _x('owl', 'Post Type Singular Name', 'textdomain'),
    'menu_name' => _x('owls', 'Admin Menu text', 'textdomain'),
    'name_admin_bar' => _x('owl', 'Add New on Toolbar', 'textdomain'),
    'archives' => __('owl Archives', 'textdomain'),
    'attributes' => __('owl Attributes', 'textdomain'),
    'parent_item_colon' => __('Parent owl:', 'textdomain'),
    'all_items' => __('All owls', 'textdomain'),
    'add_new_item' => __('Add New owl', 'textdomain'),
    'add_new' => __('Add New', 'textdomain'),
    'new_item' => __('New owl', 'textdomain'),
    'edit_item' => __('Edit owl', 'textdomain'),
    'update_item' => __('Update owl', 'textdomain'),
    'view_item' => __('View owl', 'textdomain'),
    'view_items' => __('View owls', 'textdomain'),
    'search_items' => __('Search owl', 'textdomain'),
    'not_found' => __('Not found', 'textdomain'),
    'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
    'featured_image' => __('Featured Image', 'textdomain' ),
    'set_featured_image' => __('Set featured image', 'textdomain'),
    'remove_featured_image' => __('Remove featured image', 'textdomain'),
    'use_featured_image' => __('Use as featured image', 'textdomain'),
    'insert_into_item' => __('Insert into owl', 'textdomain' ),
    'uploaded_to_this_item' => __('Uploaded to this owl', 'textdomain'),
    'items_list' => __('owls list', 'textdomain'),
    'items_list_navigation' => __('owls list navigation', 'textdomain'),
    'filter_items_list' => __('Filter owls list', 'textdomain'),
    );
    $args = array(
    'label' => __('owl', 'textdomain'),
    'description' => __('', 'textdomain'),
    'labels' => $labels,
    'menu_icon' => 'dashicons-megaphone',
    'supports' => array('title', 'excerpt', 'thumbnail'),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    );
    register_post_type('owl', $args);
}
add_action('init', 'create_owl_cpt', 0);
