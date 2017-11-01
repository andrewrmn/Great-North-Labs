<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>
	<a href="<?php the_permalink(); ?>" title="Article <?php the_title(); ?>">
		<figure class="post-preview__img bg-image" data-animate-in="up">
			<?php if( has_post_thumbnail() ):
				the_post_thumbnail();
			else: $image = get_field('blog_fallback', 'options'); ?>
	            <figure class="bg-image">
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	            </figure>
			<?php endif; ?>
		</figure>

		<div class="entry-content" data-animate-in="up">
			<?php great_north_labs_posted_on(); ?>
		</div>

		<header class="entry-header" data-animate-in="up">
			<?php if(is_home()):
				the_title( '<h3 class="h2">', '</h3>' );
			else:
				the_title( '<h4 class="h3">', '</h4>' );
			endif; ?>
		</header>
	</a>
</article>
