<?php
/**
 * Template part for displaying the Custom Modules
 *
 * @link https://www.advancedcustomfields.com/resources/flexible-content/
 *
 * @package Great_North_Labs
 */


// check if the flexible content field has rows of data
if( have_rows('content_blocks') ):

     // loop through the rows of data
    while ( have_rows('content_blocks') ) : the_row();

        if( get_row_layout() == 'split_content' ):

        	get_template_part( 'fields/split_content' );

        elseif( get_row_layout() == 'tabs' ):

        	get_template_part( 'fields/tabs');

        elseif( get_row_layout() == 'event_feature' ):

        	get_template_part( 'fields/event_feature');

        elseif( get_row_layout() == 'blocks' ):

        	get_template_part( 'fields/blocks');

        elseif( get_row_layout() == 'text_block' ):

            get_template_part( 'fields/textBlock');

        elseif( get_row_layout() == 'logos' ):

            get_template_part( 'fields/logos');

        elseif( get_row_layout() == 'featured_content' ):

            get_template_part( 'fields/featuredContent');

        endif;

    endwhile;

endif;

?>
