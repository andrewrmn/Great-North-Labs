<?php
/**
* Banner
*
* @package Great_North_Labs
*/
$headline = get_sub_field('headline');
$body = get_sub_field('body');
?>


<div class="wrapper-full section bg-white">

    <header class="wrapper wrapper--thin text-center" data-animate-in="up">
        <?php if($headline): ?>
        <h3 class="h2"><?php echo $headline; ?></h3>
        <?php endif; ?>
        <?php if($body): ?>
        <div class="user-content"><?php echo $body; ?></div>
        <?php endif; ?>
    </header>

    <?php
    	$args = array(
    		'post_type' => 'post',
    		'posts_per_page' => '3',
    	);

    	$query = new WP_Query( $args );
    ?>

    <?php if ( $query->have_posts() ): ?>
    <div class="wrapper section-short section--flush-bottom">
        <div class="row">
    	<?php while ($query->have_posts()): $query->the_post(); ?>
            <div class="col--xs--12 col--sm--4 stack-sm post-preview-sm" data-animate-in="up">
                <?php get_template_part( 'template-parts/content-preview' ); ?>
            </div>
    	<?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
