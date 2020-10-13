<?php 

 /*
        Plugin Name: Travel Menu - Post Types
        Plugin URI: 
        Description: Adds a new Post Type into WordPress
        Version: 1.0
        Author: David
        Text Domain: gymfitness
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function travelAgency_menu() {
	$labels = array(
		'name'               => _x( 'Travels', 'travel' ),
		'singular_name'      => _x( 'Travel', 'post type singular name', 'travel' ),
		'menu_name'          => _x( 'Travels', 'admin menu', 'travel' ),
		'name_admin_bar'     => _x( 'Travels', 'add new on admin bar', 'travel' ),
		'add_new'            => _x( 'Add New', 'book', 'travel' ),
		'add_new_item'       => __( 'Add New Travel', 'travel' ),
		'new_item'           => __( 'New Travels', 'travel' ),
		'edit_item'          => __( 'Edit Travels', 'travel' ),
		'view_item'          => __( 'View Travels', 'travel' ),
		'all_items'          => __( 'All Travels', 'travel' ),
		'search_items'       => __( 'Search Travels', 'travel' ),
		'parent_item_colon'  => __( 'Parent Travels:', 'travel' ),
		'not_found'          => __( 'No Travels found.', 'travel' ),
		'not_found_in_trash' => __( 'No Travels found in Trash.', 'travel' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'travel' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		// 'rewrite'            => array( 'slug' => 'travel' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'Travel-menu', $args );
}

add_action( 'init', 'travelAgency_menu' );

?>