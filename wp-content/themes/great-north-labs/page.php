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

	<div class="wrapper section is-hidden">
		<h2 class="h1"><?php the_title(); ?></h2>
	</div>

	<div class="wrapper section">
		<?php the_content(); ?>
	</div>


<?php endwhile; get_footer();
