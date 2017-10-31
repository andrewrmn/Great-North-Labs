<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

	<figure class="post-preview__img bg-image">
		<?php if( has_post_thumbnail() ):
			the_post_thumbnail();
		else: $image = get_field('blog_fallback', 'options'); ?>
			<figure class="bg-image">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</figure>
		<?php endif; ?>
	</figure>

	<div class="post-content">
		<header class="entry-header">
			<?php if( !is_singular('careers') ): ?>
			<div class="entry-content">
				<?php great_north_labs_posted_on(); ?>
			</div>
			<?php endif; ?>

			<?php the_title( '<h2 class="h2">', '</h2>' ); ?>
		</header>

		<div class="entry-content">
			<div class="user-content">
				<?php the_content( ); ?>
			</div>
		</div>
	</div>

	<?php if( !is_singular('careers') ): ?>
	<footer class="entry-footer flex flex-j-center section">
		<a class="arrow-link text-brand" href="javascript: history.go(-1)">
            <span>Back to <span class="text-bold">all articles</span></span>
        </a>
	</footer>

	<?php else: ?>
	<footer class="entry-footer flex flex-j-center section section--flush-top">
		<a class="arrow-link text-brand" href="javascript: history.go(-1)">
            <span>Back to <span class="text-bold">all careers</span></span>
        </a>
	</footer>
	<?php endif; ?>
</article>
