<?php
/**
* Tabs
*
* @package Centriam_CX
*/
?>


<div class="wrapper-full section-tall bg-white">

    <?php if(get_sub_field('headline')): ?>
    <header class="wrapper" data-animate-in="up">
        <h2 class="h4"><?php the_sub_field('headline'); ?></h2>
    </header>
    <?php endif; ?>

    <div class="wrapper" data-animate-in="up">
        <?php if( have_rows('tabs') ): ?>
        <div class="tabs">
            <?php $i = 1; while ( have_rows('tabs') ) : the_row(); ?>
            <div class="tab <?php if($i == 1): ?>is-active first-tab<?php endif; ?>">
                <div class="tab-tab">
                    <div>
                        <?php if(get_sub_field('tab_title')): ?>
                            <h4>
                                <?php the_sub_field('tab_title'); ?>
                            </h4>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="tab-body">
                    <figure class="icons">
                        <svg width="84" height="24"><use xlink:href="#shape-shapes"></use></svg>
                    </figure>


                    <?php if(get_sub_field('tab_body')): ?>
                        <div class="user-content">
                            <?php the_sub_field('tab_body'); ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
            <?php $i++; endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
