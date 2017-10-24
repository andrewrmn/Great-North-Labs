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

	<figure class="post__img bg-image">
		<?php the_post_thumbnail(); ?>
	</figure>

	<div class="post-content">
		<header class="entry-header">
			<div class="entry-content">
				<?php great_north_labs_posted_on(); ?>
			</div>

			<?php the_title( '<h2 class="h2">', '</h2>' ); ?>
		</header><!-- .entry-header -->


		<div class="entry-content">
			<div class="user-content">
				<?php the_content( ); ?>
			</div>

		</div><!-- .entry-content -->
	</div>



	<footer class="entry-footer flex flex-j-center section">
		<a class="arrow-link text-brand" href="javascript: history.go(-1)">
            <span>Back to <span class="text-bold">all articles</span></span>
        </a>
	</footer>
</article>
