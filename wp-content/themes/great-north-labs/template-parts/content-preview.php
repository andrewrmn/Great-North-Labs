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

		<figure class="post-preview__img bg-image">
			<?php if(get_the_post_thumbnail()): ?>
			<?php the_post_thumbnail(); ?>
			<?php else: ?>
				<img src="<?php home_url(); ?>/wp-content/uploads/2017/10/backup.png" alt="poly pattern" />
			<?php endif; ?>
		</figure>


		<div class="entry-content">
			<?php great_north_labs_posted_on(); ?>
		</div>

		<header class="entry-header">
			<?php the_title( '<h3 class="h2">', '</h3>' ); ?>
		</header><!-- .entry-header -->
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
