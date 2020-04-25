<?php

// custom post type | project
add_action( 'init', 'register_cpt_project' );

function register_cpt_project() {

	$labels = array( 
		'name' => _x( 'projects', 'projects' ),
		'singular_name' => _x( 'projects', 'projects' ),
		'add_new' => _x( 'Add New', 'projects' ),
		'add_new_item' => _x( 'Add New projects', 'projects' ),
		'edit_item' => _x( 'Edit projects', 'projects' ),
		'new_item' => _x( 'New projects', 'projects' ),
		'view_item' => _x( 'View projects', 'projects' ),
		'search_items' => _x( 'Search projects', 'projects' ),
		'not_found' => _x( 'No projectss found', 'projects' ),
		'not_found_in_trash' => _x( 'No projectss found in Trash', 'projects' ),
		'parent_item_colon' => _x( 'Parent projects:', 'projects' ),
		'menu_name' => _x( 'Projects', 'Projects' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,

		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'project' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,


		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array( 'slug' => 'projects' ),
		'capability_type' => 'post'
	);
	register_post_type( 'project', $args );
}

// // custom post type categories | video
// register_taxonomy( 
// 	'categories', 
// 	'video',
// 	array( 
// 		'hierarchical' => true, 
// 		'label' => 'Video Categories',
// 		'show_ui' => true,
// 		'query_var' => true,
// 		'rewrite' => array('slug' => ''),
// 		'singular_label' => 'Video Category'
// 	) 
// );


add_action('init', 'demo_add_default_boxes');
 
function demo_add_default_boxes() {
    register_taxonomy_for_object_type('category', 'video');
}





// custom post type | faq
// function register_cpt_faq() {

// 	$labels = array( 
// 		'name' => _x( 'faqs', 'faq' ),
// 		'singular_name' => _x( 'faq', 'faq' ),
// 		'add_new' => _x( 'Add New', 'faq' ),
// 		'add_new_item' => _x( 'Add New faq', 'faq' ),
// 		'edit_item' => _x( 'Edit faq', 'faq' ),
// 		'new_item' => _x( 'New faq', 'faq' ),
// 		'view_item' => _x( 'View faq', 'faq' ),
// 		'search_items' => _x( 'Search faqs', 'faq' ),
// 		'not_found' => _x( 'No faqs found', 'faq' ),
// 		'not_found_in_trash' => _x( 'No faqs found in Trash', 'faq' ),
// 		'parent_item_colon' => _x( 'Parent faq:', 'faq' ),
// 		'menu_name' => _x( 'FAQ\'s', 'faq' ),
// 	);

// 	$args = array( 
// 		'labels' => $labels,
// 		'hierarchical' => false,

// 		'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ),
// 		'public' => true,
// 		'show_ui' => true,
// 		'show_in_menu' => true,


// 		'show_in_nav_menus' => true,
// 		'publicly_queryable' => true,
// 		'exclude_from_search' => false,
// 		'has_archive' => true,
// 		'query_var' => true,
// 		'can_export' => true,
// 		'rewrite' => true,
// 		'capability_type' => 'post'
// 	);
// 	register_post_type( 'faq', $args );
// }
// add_action( 'init', 'register_cpt_faq' );






// custom post type | video
add_action( 'init', 'register_cpt_service' );

function register_cpt_service() {

	$labels = array( 
		'name' => _x( 'services', 'services' ),
		'singular_name' => _x( 'services', 'services' ),
		'add_new' => _x( 'Add New', 'services' ),
		'add_new_item' => _x( 'Add New services', 'services' ),
		'edit_item' => _x( 'Edit services', 'services' ),
		'new_item' => _x( 'New services', 'services' ),
		'view_item' => _x( 'View services', 'services' ),
		'search_items' => _x( 'Search services', 'services' ),
		'not_found' => _x( 'No servicess found', 'services' ),
		'not_found_in_trash' => _x( 'No servicess found in Trash', 'services' ),
		'parent_item_colon' => _x( 'Parent services:', 'services' ),
		'menu_name' => _x( 'Services', 'services' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,

		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'service' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,


		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'service', $args );
}


// custom post type | mellon
add_action( 'init', 'register_cpt_mellon_item' );

function register_cpt_mellon_item() {

	$labels = array( 
		'name' => _x( 'mellon', 'mellon' ),
		'singular_name' => _x( 'mellon', 'mellon' ),
		'add_new' => _x( 'Add New', 'mellon' ),
		'add_new_item' => _x( 'Add New mellon', 'mellon' ),
		'edit_item' => _x( 'Edit mellon', 'mellon' ),
		'new_item' => _x( 'New mellon', 'mellon' ),
		'view_item' => _x( 'View mellon', 'mellon' ),
		'search_items' => _x( 'Search mellon', 'mellon' ),
		'not_found' => _x( 'No mellons found', 'mellon' ),
		'not_found_in_trash' => _x( 'No mellons found in Trash', 'mellon' ),
		'parent_item_colon' => _x( 'Parent mellon:', 'mellon' ),
		'menu_name' => _x( 'Mellon', 'mellon' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,

		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'mellon' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,


		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'mellon-item', $args );
}


// custom post type | mellon
add_action( 'init', 'register_cpt_winslow_item' );

function register_cpt_winslow_item() {

	$labels = array( 
		'name' => _x( 'winslow', 'winslow' ),
		'singular_name' => _x( 'winslow', 'winslow' ),
		'add_new' => _x( 'Add New', 'winslow' ),
		'add_new_item' => _x( 'Add New winslow', 'winslow' ),
		'edit_item' => _x( 'Edit winslow', 'winslow' ),
		'new_item' => _x( 'New winslow', 'winslow' ),
		'view_item' => _x( 'View winslow', 'winslow' ),
		'search_items' => _x( 'Search winslow', 'winslow' ),
		'not_found' => _x( 'No winslows found', 'winslow' ),
		'not_found_in_trash' => _x( 'No winslows found in Trash', 'winslow' ),
		'parent_item_colon' => _x( 'Parent winslow:', 'winslow' ),
		'menu_name' => _x( 'Winslow', 'winslow' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,

		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'winslow' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,


		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'winslow-item', $args );
}



// custom post type | mellon
add_action( 'init', 'register_cpt_press' );

function register_cpt_press() {

	$labels = array( 
		'name' => _x( 'press', 'press' ),
		'singular_name' => _x( 'press', 'press' ),
		'add_new' => _x( 'Add New', 'press' ),
		'add_new_item' => _x( 'Add New press', 'press' ),
		'edit_item' => _x( 'Edit press', 'press' ),
		'new_item' => _x( 'New press', 'press' ),
		'view_item' => _x( 'View press', 'press' ),
		'search_items' => _x( 'Search press', 'press' ),
		'not_found' => _x( 'No presss found', 'press' ),
		'not_found_in_trash' => _x( 'No presss found in Trash', 'press' ),
		'parent_item_colon' => _x( 'Parent press:', 'press' ),
		'menu_name' => _x( 'Press', 'press' ),
	);

	$args = array( 
		'labels' => $labels,
		'hierarchical' => false,

		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'press' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,


		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	);
	register_post_type( 'press', $args );
}


add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Splash images",
		"singular_name" => "Splash image",
		"menu_name" => "Splash images",
		"all_items" => "All splash images",
		"add_new" => "Add new",
		"add_new_item" => "Add new splash image",
		"edit_item" => "Edit splash image",
		"new_item" => "New splash image",
		"view_item" => "View splash image",
		"search_items" => "Search splash image",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "splashimages", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-image",		
		"supports" => array( "title", "thumbnail" ),		
		"taxonomies" => array( "category", "post_tag" ),		
	);
	register_post_type( "splashimages", $args );

	// $labels = array(
	// 	"name" => "Images",
	// 	"singular_name" => "Image",
	// 	"menu_name" => "Images",
	// 	"all_items" => "All Images",
	// 	"add_new" => "Add new",
	// 	"add_new_item" => "Add new image",
	// 	"edit_item" => "Edit image",
	// 	"new_item" => "New Image",
	// 	"view_item" => "View image",
	// 	"search_items" => "Search image",
	// 	);

	// $args = array(
	// 	"labels" => $labels,
	// 	"description" => "",
	// 	"public" => true,
	// 	"show_ui" => true,
	// 	"show_in_rest" => true,
	// 	"has_archive" => false,
	// 	"show_in_menu" => true,
	// 	"exclude_from_search" => false,
	// 	"capability_type" => "post",
	// 	"map_meta_cap" => true,
	// 	"hierarchical" => false,
	// 	"rewrite" => array( "slug" => "images", "with_front" => true ),
	// 	"query_var" => true,
	// 	"menu_icon" => "dashicons-format-gallery",		
	// 	"supports" => array( "title", "thumbnail" ),		
	// 	"taxonomies" => array( "category", "post_tag" ),		
	// );
	// register_post_type( "images", $args );

// End of cptui_register_my_cpts()
}




// no empty lines after this! ?>