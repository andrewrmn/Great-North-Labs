<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Great_North_Labs
 */

get_header(); ?>

	<div id="primary" class="wrapper section">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<?php if(is_singular('careers')): ?>

			<?php gravity_form( 2, true, true, false, '', true, 12 ); ?>

		<?php endif; ?>

	</div>



<?php

get_footer();
