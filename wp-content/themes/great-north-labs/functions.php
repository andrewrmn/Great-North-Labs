<?php
/**
 * Great North Labs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Great_North_Labs
 */

if ( ! function_exists( 'great_north_labs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function great_north_labs_setup() {
		load_theme_textdomain( 'great-north-labs', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'great-north-labs' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}
endif;
add_action( 'after_setup_theme', 'great_north_labs_setup' );


function great_north_labs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'great_north_labs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'great_north_labs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'great_north_labs_widgets_init' );

function great_north_labs_scripts() {
	wp_enqueue_style( 'gnl-style', get_template_directory_uri() . '/app/css/main.css' );
	// if(is_front_page()){
	// 	wp_enqueue_script( 'cx-carousel', get_template_directory_uri() . '/app/js/slick.min.js', array('jquery'), '', true );
	// }
	wp_enqueue_script( 'cx-js', get_template_directory_uri() . '/app/js/main.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'great_north_labs_scripts' );


require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/cpt.php';
