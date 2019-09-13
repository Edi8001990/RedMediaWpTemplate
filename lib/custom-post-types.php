<?php

function changeme_cpt() {

    $labels = array(
        'name'               => _x('changeme', 'post type general name'),
        'singular_name'      => _x('changeme', 'post type singular name'),
        'add_new'            => _x('Add New', 'changeme'),
        'add_new_item'       => __('Add New changeme'),
        'edit_item'          => __('Edit changeme'),
        'new_item'           => __('New changeme'),
        'view_item'          => __('View changeme'),
        'search_items'       => __('Search changeme'),
        'not_found'          => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'query_var'          => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-customizer',
        'rewrite'            => true,
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','thumbnail')
      );

    register_post_type( 'changeme' , $args );
}
add_action('init', 'changeme_cpt');