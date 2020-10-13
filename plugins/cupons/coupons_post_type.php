<?php 

 /*
        Plugin Name: Coupons - Post Types
        Plugin URI: 
        Description: Adds a new Post Type into WordPress
        Version: 1.0
        Author: David
        Text Domain: gymfitness
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function Coupon_Menu() {
	$labels = array(
		'name'               => _x( 'Coupons', 'Coupon' ),
		'singular_name'      => _x( 'Coupon', 'post type singular name', 'Coupon' ),
		'menu_name'          => _x( 'Coupons', 'admin menu', 'Coupon' ),
		'name_admin_bar'     => _x( 'Coupons', 'add new on admin bar', 'Coupon' ),
		'add_new'            => _x( 'Add New', 'book', 'Coupon' ),
		'add_new_item'       => __( 'Add New Coupon', 'Coupon' ),
		'new_item'           => __( 'New Coupons', 'Coupon' ),
		'edit_item'          => __( 'Edit Coupons', 'Coupon' ),
		'view_item'          => __( 'View Coupons', 'Coupon' ),
		'all_items'          => __( 'All Coupons', 'Coupon' ),
		'search_items'       => __( 'Search Coupons', 'Coupon' ),
		'parent_item_colon'  => __( 'Parent Coupons:', 'Coupon' ),
		'not_found'          => __( 'No Coupons found.', 'Coupon' ),
		'not_found_in_trash' => __( 'No Coupons found in Trash.', 'Coupon' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'Coupon' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Coupon' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'Coupon-menu', $args );
}

add_action( 'init', 'Coupon_Menu' );

?>