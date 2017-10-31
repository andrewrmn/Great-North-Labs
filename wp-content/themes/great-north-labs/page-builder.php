<?php
/**
 * Template Name: Flexible Content
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

get_header();  while ( have_posts() ) : the_post(); ?>

	<div class="hero hero-mask <?php if (get_field('tall_intro')): ?>hero-tall<?php endif; ?>">
		<div class="wrapper text-white">

			<h2 class="h1"><?php the_field('headline'); ?></h2>
			<div class="text-thin user-content user-content--lg">
				<?php the_content(); ?>
			</div>
			<?php $link = get_field('link'); if( $link ): ?>
	            <a class="arrow-link text-white" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
	                <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_field('link_bold_text'); ?></span></span>
	            </a>
	        <?php endif; ?>
		</div>

		<figure class="bg-image bg-image--poly">
			<?php if( get_field('poly_image') ): ?>
				<img src="<?php the_field('poly_image'); ?>" alt="hexagonal pattern" />
			<? else: $image = get_field('fallback_poly', 'options'); ?>
	            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</figure>

		<figure class="bg-image">
			<?php if( has_post_thumbnail() ):
				the_post_thumbnail();
			else: $image = get_field('fallback_poly', 'options'); ?>
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</figure>
	</div>

	<?php get_template_part( 'fields/custom-fields');


endwhile; get_footer();
