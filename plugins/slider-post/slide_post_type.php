<?php 

 /*
        Plugin Name: Slide Menu - Post Types
        Plugin URI: 
        Description: Adds a new Post Type into WordPress
        Version: 1.0
        Author: David
        Text Domain: gymfitness
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function slideAgency_menu() {
	$labels = array(
		'name'               => _x( 'Slides', 'slide' ),
		'singular_name'      => _x( 'slide', 'post type singular name', 'slide' ),
		'menu_name'          => _x( 'Slides', 'admin menu', 'slide' ),
		'name_admin_bar'     => _x( 'Slides', 'add new on admin bar', 'slide' ),
		'add_new'            => _x( 'Add New', 'book', 'slide' ),
		'add_new_item'       => __( 'Add New slide', 'slide' ),
		'new_item'           => __( 'New Slides', 'slide' ),
		'edit_item'          => __( 'Edit Slides', 'slide' ),
		'view_item'          => __( 'View Slides', 'slide' ),
		'all_items'          => __( 'All Slides', 'slide' ),
		'search_items'       => __( 'Search Slides', 'slide' ),
		'parent_item_colon'  => __( 'Parent Slides:', 'slide' ),
		'not_found'          => __( 'No Slides found.', 'slide' ),
		'not_found_in_trash' => __( 'No Slides found in Trash.', 'slide' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'slide' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'slide-menu', $args );
}

add_action( 'init', 'slideAgency_menu' );

?>