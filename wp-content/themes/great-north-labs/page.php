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


	<div class="hero hero-mask">
		<div class="wrapper text-white">
			<div class="text-thin">
				<h2 class="h1">An early stage venture fund.</h2>
				<p class="p-lg">Capital and startup intelligence to cultivate the next generation of tech companies and people across “the frozen tundra”.</p>
			</div>

			<a class="arrow-link" href="">
				<span>Let's <span class="text-bold">connect</span></span>
			</a>
		</div>

		<?php if(has_post_thumbnail()): ?>
			<figure class="bg-image">
				<?php the_post_thumbnail(); ?>
			</figure>
		<?php endif; ?>
	</div>


	<div>
		<?php get_template_part( 'fields/custom-fields'); ?>
	</div>


	<div class="wrapper section is-hidden">
		<h2 class="h1"><?php the_title(); ?></h2>
	</div>

	<div class="wrapper section is-hidden">
		<?php the_content(); ?>
	</div>


<?php endwhile; get_footer();
