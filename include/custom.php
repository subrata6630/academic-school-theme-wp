<?php

	
		
/* --------------About Customs Post Register----------------- */


if(function_exists('register_post_type')) {
		register_post_type('home-gallery', array(
			'labels' => array(
				'name' => __('Home Gallery'),
				'menu_name' => __('Home Gallery'),
				'add_new' => __('Add New post'),
				'add_new_item' => __(' Home Gallery'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-admin-home',
			'supports' => array( '')
		   ));
	    }
		
		

/* --------------About Customs Post Register----------------- */
if(function_exists('register_post_type')) {
		register_post_type('about', array(
			'labels' => array(
				'name' => __('About Us'),
				'menu_name' => __('About Us'),
				'add_new' => __('Add New post'),
				'add_new_item' => __(' About Us Post'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-share-alt2',
			'supports' => array( 'title','editor','thumbnail')
		   ));
		   
		}


/* --------------Speech Customs Post Register----------------- */
if(function_exists('register_post_type')) {
		register_post_type('speech', array(
			'labels' => array(
				'name' => __('Speech'),
				'menu_name' => __('Speech'),
				'add_new' => __('Add New post'),
				'add_new_item' => __(' Speech Post'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-id-alt',
			'supports' => array( 'title','editor','thumbnail')
		   ));
		   
		}

/* --------------Acadcmics Customs Post Register----------------- */
if(function_exists('register_post_type')) {
		register_post_type('acadcmics', array(
			'labels' => array(
				'name' => __('Acadcmics'),
				'menu_name' => __('Acadcmics'),
				'add_new' => __('Add New post'),
				'add_new_item' => __(' Acadcmics Post'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-format-image',
			'supports' => array( '')
		   ));
		   
		}


				
		
		
		
/* --------------Video Customs Post Register----------------- */
if(function_exists('register_post_type')) {
		register_post_type('video', array(
			'labels' => array(
				'name' => __(' Video Upload '),
				'menu_name' => __(' Video Upload '),
				'add_new' => __('Add New post'),
				'add_new_item' => __(' Video Post'),
			),
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'menu_icon' => 'dashicons-format-video',
			'supports' => array( '')
		   ));
	    }
		
				






	
		
		

		
/* --------------Latest Customs Post Register----------------- */


if(function_exists('register_post_type')) {
		register_post_type('latest', array(
			'labels' => array(
				'name' => __('Latest'),
				'menu_name' => __('Latest'),
				'add_new' => __('Add New post'),
				'add_new_item' => __('Latest Post'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-calendar-alt',
			'supports' => array( 'title','editor','thumbnail')
		   ));
	    }
		
	
	
if(function_exists('register_post_type')) {
		register_post_type('gallery', array(
			'labels' => array(
				'name' => __('Gallery'),
				'menu_name' => __('Gallery'),
				'add_new' => __('Add New post'),
				'add_new_item' => __('Gallery Post'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array( 'title','thumbnail')
		   ));
	    }
		
	

add_action( 'init', function() {
    remove_post_type_support( 'post', 'editor', 'thumbnail');
    //remove_post_type_support( 'page', 'editor' );
}, 99);



/**
 * Post Type: Informations.
 */
	
function cptui_register_my_cpts_information() {


	$labels = [
		"name" => __( "Informations", "EducationalTheme" ),
		"singular_name" => __( "Information", "EducationalTheme" ),
	];

	$args = [
		"label" => __( "Informations", "EducationalTheme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "information",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "information", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "information", $args );
}

add_action( 'init', 'cptui_register_my_cpts_information' );

/**
 * Taxonomy: Information Categories.
 */

function cptui_register_my_taxes_infocats() {

	$labels = [
		"name" => __( "Information Categories", "EducationalTheme" ),
		"singular_name" => __( "Information Category", "EducationalTheme" ),
	];

	$args = [
		"label" => __( "Information Categories", "EducationalTheme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'info', 'with_front' => false, ],

		];
	register_taxonomy( "infocats", [ "information" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_infocats' );



	