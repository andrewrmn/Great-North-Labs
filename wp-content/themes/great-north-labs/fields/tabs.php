<?php
/**
* Tabs
*
* @package Centriam_CX
*/
?>


<div class="wrapper-full section bg-white">

    <?php if(get_sub_field('headline')): ?>
    <header class="wrapper wrapper--thin text-center" data-animate-in="up">
        <h2 class="h2"><?php the_sub_field('headline'); ?></h2>
    </header>
    <?php endif; ?>

    <div class="wrapper-wide section-short section--flush-bottom" data-animate-in="up">
        <?php if( have_rows('tabs') ): ?>
        <div class="tabs">
            <?php while ( have_rows('tabs') ) : the_row(); ?>
            <div class="tab">
                <div class="tab-tab">
                    <div>
                        <?php if(get_sub_field('tab_title')): ?>
                            <div class="h3">
                                <?php the_sub_field('tab_title'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="tab-body">
                    <?php if(get_sub_field('tab_body')): ?>
                        <div class="user-content">
                            <?php the_sub_field('tab_body'); ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
