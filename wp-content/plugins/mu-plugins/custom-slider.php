<?php

/*
Plugin Name: Custom Slider
Description: A custom slider plugin for WordPress
Version: 1.0
*/

function custom_slider_post_type() {
    $labels = [
        'name'               => _x( 'Sliders', 'post type general name' ),
        'singular_name'      => _x( 'Slider', 'post type singular name' ),
        'menu_name'          => _x( 'Sliders', 'admin menu' ),
        'name_admin_bar'     => _x( 'Slider', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New Slider', 'slider' ),
        'add_new_item'       => __( 'Add New Slider' ),
        'new_item'           => __( 'New Slider' ),
        'edit_item'          => __( 'Edit Slider' ),
        'view_item'          => __( 'View Slider' ),
        'all_items'          => __( 'All Sliders' ),
        'search_items'       => __( 'Search Sliders' ),
        'parent_item_colon'  => __( 'Parent Sliders:' ),
        'not_found'          => __( 'No Sliders found.' ),
        'not_found_in_trash' => __( 'No Sliders found in Trash.' )
    ];
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
    ];

    register_post_type( 'slider', $args );
}

add_action( 'init', 'custom_slider_post_type' );