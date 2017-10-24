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
                <p class="h3">We are a venture capital fund and startup school hyper-focused on the companies and entrepenuers of tomorrow.</p>
            </div>

            <div class="text-thin section section--flush-bottom flex-after-sm ">
                <a class="arrow-link arrow-link--inline" href="">
                    <span>Learn About <span class="text-bold">Our Fund</span></span>
                </a>

                <a class="arrow-link arrow-link--flush" href="">
                    <span>Discover <span class="text-bold">Startup School</span></span>
                </a>
            </div>
        </div>

        <figure class="bg-image">
            <?php the_post_thumbnail(); ?>
        </figure>
    </div>


<?php endwhile; get_footer();
