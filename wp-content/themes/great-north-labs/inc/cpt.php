<?php
/**
 * Great North Labs Theme Custom Post Types
 *
 * @package great_north_labs
 */

 function great_north_labs_cpt_init() {

     // careers Post Type
     $careers_labels = array(
         'name'               => _x( 'Careers', 'post type general name', 'great_north_labs' ),
         'singular_name'      => _x( 'Career', 'post type singular name', 'great_north_labs' ),
         'not_found'          => __( 'No careers found.', 'great_north_labs' ),
         'not_found_in_trash' => __( 'No careers found in Trash', 'great_north_labs' )
     );
     $careers_args = array(
         'labels'                => $careers_labels,
         'public'                => true,
         'publicly_queryable'    => true,
         'show_ui'               => true,
         'show_in_menu'          => true,
         'show_in_nav_menus'     => true,
         'exclude_from_search'   => false,
         'query_var'             => true,
         'rewrite'               => array( 'slug' => 'careers' ),
         'capability_type'       => 'post',
         'has_archive'           => false,
         'hierarchical'          => true,
         'menu_position'         => 35,
         'menu_icon'             => 'dashicons-businessman',
         'supports'              => array( 'title', 'editor', 'revisions', 'thumbnail' ),
     );
     register_post_type( 'careers', $careers_args );
 }
 add_action( 'init', 'great_north_labs_cpt_init' );
