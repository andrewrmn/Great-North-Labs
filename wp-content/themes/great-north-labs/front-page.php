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

    <div class="wrapper section">

        <h1 class="h1">Heading 1</h1>
        <h1 class="h2">Heading 2</h1>
        <h1 class="h3 has-accent">Heading 3</h1>
        <h1 class="h4">Heading 4</h1>

        <p class="p-lg">Paragraph text LARGE</p>
        <p>Paragraph text</p>

        <a class="arrow-link" href="">
            <span>Learn About <span class="text-bold">Our Fund</span></span>
        </a>



    </div>


<?php endwhile; get_footer();
