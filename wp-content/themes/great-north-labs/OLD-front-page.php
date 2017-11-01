<?php
/**
 * Home Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

get_header();  while ( have_posts() ) : the_post(); ?>

    <div class="home-hero">
        <div class="wrapper text-white">
            <div class="text-thin">
                <h2 class="h1">Great North Labs.</h2>
                <div class="user-content user-content--lead"><?php the_content(); ?></div>
            </div>

            <div class="text-thin section-x-short section--flush-bottom flex-after-sm">
                <?php $link = get_field('link'); if( $link ): ?>
                    <a class="arrow-link arrow-link--inline" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                        <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_field('link_bold_text'); ?></span></span>
                    </a>
                <?php endif; ?>

                <?php $link = get_field('link_2'); if( $link ): ?>
                    <a class="arrow-link arrow-link--flush" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                        <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_field('link_2_bold_text'); ?></span></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <figure class="bg-image bg-image--poly">
			<?php if( get_field('poly_image') ): ?>
				<img src="<?php the_field('poly_image'); ?>" alt="hexagonal pattern" />
			<? else: $image = get_field('fallback_poly', 'options'); ?>
	            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</figure>

        <figure class="bg-image">
            <?php the_post_thumbnail(); ?>
        </figure>
    </div>


<?php endwhile; get_footer();
