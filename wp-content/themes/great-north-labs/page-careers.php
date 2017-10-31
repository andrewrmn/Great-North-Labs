<?php
/**
 * Careers Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Great_North_Labs
 */

get_header();  while ( have_posts() ) : the_post(); ?>

	<div class="hero hero-mask">
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

		<figure class="bg-image">
			<?php if( has_post_thumbnail() ):
				the_post_thumbnail();
			else: $image = get_field('fallback_poly', 'options'); ?>
	            <figure class="bg-image">
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	            </figure>
			<?php endif; ?>
		</figure>
	</div>

	<?php if( have_rows('career_group') ): ?>
	    <div class="wrapper section">
	        <?php while ( have_rows('career_group') ) : the_row(); ?>
	            <div class="career-block">
					<div>
						<h3 class="h2"><?php the_sub_field('company_name'); ?></h3>
						<div class="text-thin">
							<p><?php the_sub_field('short_description'); ?></p>
						</div>
					</div>
	                <?php
	                $posts = get_sub_field('careers');
	                if( $posts ): ?>
	                	<ul class="career-list">
	                	<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
	                	    <li>
	                            <a href="<?php echo get_permalink( $p->ID ); ?>?position=<?php echo $p->post_name ?>" class="career">
	                                <span class="h3"><?php echo get_the_title( $p->ID ); ?></span>
	                            </a>
	                	    </li>
	                	<?php endforeach; ?>
	                	</ul>
	                <?php endif; ?>




	            </div>
	        <?php endwhile; ?>

	    </div>
	<?php endif; ?>

	<?php get_template_part( 'fields/custom-fields');


endwhile; get_footer();
