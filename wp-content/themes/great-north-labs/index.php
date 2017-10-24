<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

get_header(); ?>
	<div class="wrapper section">
		<h2 class="h1">Great North Blog</h2>
		<p class="p-lg">Read the latest insights and happenings at Great North Labs.</p>
	</div>

	<div class="wrapper section section--flush-top">
		<div class="row">
			<div class="col--md--8">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-preview' );

					endwhile;

					the_posts_pagination( );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>


			</div>

			<div class="col--md--4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>




<?php
get_footer();
