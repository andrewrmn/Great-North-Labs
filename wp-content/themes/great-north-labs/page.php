<?php
/**
 * The template for displaying all pages
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

get_header();  while ( have_posts() ) : the_post(); ?>

	<?php if(is_page('events')): ?>
		<div class="wrapper section">
			<?php the_content(); ?>
		</div>

	<?php else: ?>

		<div class="wrapper section">
			<div class="user-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php get_template_part( 'fields/custom-fields'); ?>


<?php endwhile; get_footer();
