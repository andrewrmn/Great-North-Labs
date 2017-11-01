<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Great_North_Labs
 */

get_header(); ?>

	<div class="hero hero-mask hero-tall">
		<div class="wrapper text-white text-center">
			<p class="h1"><?php esc_html_e( 'Oops! This page can&rsquo;t be found.', 'great-north-labs' ); ?></p>
			<p>Please use the navigation to get to a working page on the site.</p>
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

<?php
get_footer();
