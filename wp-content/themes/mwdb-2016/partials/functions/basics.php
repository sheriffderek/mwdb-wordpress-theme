<?php // list in order of importance


// hide admin bar
show_admin_bar( false );


// register and call style sheet
function sanityCheck_styles() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'sanityCheck_styles' );


// register and call scripts
function sanityCheck_scripts() {   
  wp_register_script( 'main-scripts', 
    get_template_directory_uri() . '/js/min/scripts-min.js',
    array( 'jquery' ) );  
  wp_enqueue_script( 'main-scripts' );
} 
add_action( 'wp_enqueue_scripts', 'sanityCheck_scripts' );


// add featured image ability
function add_featured_image_ability() {
	add_theme_support( 'post-thumbnails' ); 
}
add_action( 'after_setup_theme', 'add_featured_image_ability' );



// remove p tags from images
function filter_ptags_on_images($content) {
  // do a regular expression replace...
  // find all p tags that have just
  // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
  // replace it with just the image tag...
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
// we want it to be run after the autop stuff... 10 is default. ? ? ?
add_filter('the_content', 'filter_ptags_on_images');


// First, create a function that includes the path to your favicon
function add_favicon() {
    $favicon_url = get_stylesheet_directory_uri() . '/images/icons/admin-favicon.ico?v=2';
  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
  
// Now, just make sure that function runs when you're on the login page and admin pages  
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');


// no empty lines after this! ?>