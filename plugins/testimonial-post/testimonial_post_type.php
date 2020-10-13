<?php 

 /*
        Plugin Name: Testimonials - Post Types
        Plugin URI: 
        Description: Adds a new Post Type into WordPress
        Version: 1.0
        Author: David
        Text Domain: gymfitness
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function testimonialAgency_menu() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'testimonial' ),
		'singular_name'      => _x( 'testimonial', 'post type singular name', 'testimonial' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'testimonial' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'testimonial' ),
		'add_new'            => _x( 'Add New', 'book', 'testimonial' ),
		'add_new_item'       => __( 'Add New testimonial', 'testimonial' ),
		'new_item'           => __( 'New Testimonials', 'testimonial' ),
		'edit_item'          => __( 'Edit Testimonials', 'testimonial' ),
		'view_item'          => __( 'View Testimonials', 'testimonial' ),
		'all_items'          => __( 'All Testimonials', 'testimonial' ),
		'search_items'       => __( 'Search Testimonials', 'testimonial' ),
		'parent_item_colon'  => __( 'Parent Testimonials:', 'testimonial' ),
		'not_found'          => __( 'No Testimonials found.', 'testimonial' ),
		'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'testimonial' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'testimonial' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'testimonial-menu', $args );
}

add_action( 'init', 'testimonialAgency_menu' );

?>