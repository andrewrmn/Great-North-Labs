<?php
/**
* Large Tiles
*
* @package Great_North_Labs
*/
?>


<div class="wrapper-full section bg-white">

    <?php if(get_sub_field('headline')): ?>
    <header class="wrapper wrapper--thin text-center" data-animate-in="up">
        <h3 class="h2"><?php the_sub_field('headline'); ?></h3>
    </header>
    <?php endif; ?>

    <div class="wrapper">
        <?php
        $events = tribe_get_events( array(
            'posts_per_page' => 2,
            'tax_query'=> array(
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                    'terms' => 'bootcamp'
                )
            )
        ));

        foreach ( $events as $event ) {
            $startDate = tribe_get_start_date($event, false);
            $endDate = tribe_get_end_date($event, false);
            $startTime = tribe_get_start_time($event);
            $endTime = tribe_get_end_time($event);
        ?>
            <div class="event-preview">
                <figure class="event-preview__img" data-animate-in="fade">
                    <span class="bg-image">
                    		<?php if( get_the_post_thumbnail( $event ) ):
                    			echo get_the_post_thumbnail( $event );
                    		else: $image = get_field('blog_fallback', 'options'); ?>
                				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    		<?php endif; ?>
                    	</figure>
                    </span>
                </figure>
                <div class="event-preview__info text-group" data-animate-in="up">
                    <h4 class="h3 has-accent"><?php echo get_the_title( $event ); ?></h4>
                    <div>
                        <p class="h4"><?php echo $startDate; ?> <?php if ($startDate != $endDate): echo ' - ' . $endDate; endif; ?></p>
                        <p class="h4"><?php echo $startTime; ?> <?php if ($startTime != $endTime): echo ' - ' . $endTime; endif; ?></p>
                        <p class="h4"><?php echo get_the_title( $event ); ?></p>
                    </div>
                    <p class="p-sm"><?php echo get_the_excerpt( $event ); ?></p>
                    <a class="btn" href="<?php echo get_the_permalink( $event ); ?>">
                        Sign Up
                    </a>
                </div>
            </div>
    	<?php } ?>
    </div>

    <div class="text-center text-group-tall">
        <?php if(get_sub_field('body')): ?>
            <div class="text-thin" data-animate-in="up">
                <div class="user-content text-center">
                    <?php the_sub_field('body'); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php $link = get_sub_field('link'); if( $link ): ?>
            <div class="flex flex-j-center" data-animate-in="up">
                <div>
                    <a class="arrow-link theme-color" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                        <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_sub_field('link_text_bold'); ?></span></span>
                    </a>
                </div>

            </div>
        <?php endif; ?>
    </div>
</div>
