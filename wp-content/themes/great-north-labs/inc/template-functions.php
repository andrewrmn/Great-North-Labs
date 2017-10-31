<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Great_North_Labs
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function great_north_labs_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'great_north_labs_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function great_north_labs_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'great_north_labs_pingback_header' );



// Allow SVG Uploads
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function remove_customize_page(){
	global $submenu;
	unset($submenu['themes.php'][6]); // remove customize link
}
add_action( 'admin_menu', 'remove_customize_page');


// Options pages
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
