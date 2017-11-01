<?php
/**
* Split Content
*
* @package Great_North_Labs
*/

$image = get_sub_field('image');

?>


<div class="split-block <?php if(get_sub_field('image_on_right')) { ?>split-block--flip bg-whiteS<?php } ?>">
    <div class="split-block__intro" data-animate-in="fade">
        <?php if( !empty($image) ): ?>
            <figure class="bg-image" data-animate-in="fade">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            </figure>
        <?php endif; ?>

        <div class="split-block__intro-text">
            <div>
                <?php if(get_sub_field('number')): ?>
                <div class="split-block__intro-text_num" data-animate-in="left"><?php the_sub_field('number'); ?></div>
                <?php endif; ?>
                <?php if(get_sub_field('title')): ?>
                <div class="h4 split-block__intro-text__title" data-animate-in="right"><?php the_sub_field('title'); ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <div class="split-block__content text-group-tall">
        <?php if(get_sub_field('headline')): ?>
        <h3 class="h2" data-animate-in="up"><?php the_sub_field('headline'); ?></h3>
        <?php endif; ?>

        <?php if(get_sub_field('body')): ?>
        <div class="user-content" data-animate-in="up"><?php the_sub_field('body'); ?></div>
        <?php endif; ?>


        <?php $link = get_sub_field('link'); if( $link ): ?>
            <a class="arrow-link theme-color" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"  data-animate-in="up">
                <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_sub_field('link_bold_text'); ?></span></span>
            </a>
        <?php endif; ?>
    </div>
</div>
