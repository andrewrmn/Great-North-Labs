<?php
/**
* Banner
*
* @package Great_North_Labs
*/
$headline = get_sub_field('headline');
$body = get_sub_field('body');
?>

<?php if( have_rows('logo') ): ?>
<div class="wrapper-full section bg-white border-top">
    <header class="wrapper wrapper--thin text-center">
        <?php if($headline): ?>
            <h3 class="h2"><?php echo $headline; ?></h3>
        <?php endif; ?>
        <?php if($body): ?>
        <div class="user-content"><?php echo $body; ?></div>
        <?php endif; ?>
    </header>

    <div class="wrapper wrapper--md section-x-short">
        <div class="row row--align-center logo-list">
            <?php while ( have_rows('logo') ) : the_row(); ?>
                <div class="col--xs--12 col--sm--3 stack-sm">
                    <?php if( get_sub_field('url') ): ?><a class="text-group-tall" href="<?php the_sub_field('url'); ?>" target="_blank"><?php endif; ?>
                        <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                            <img class="img-center" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <?php if(get_sub_field('company_name')): ?>
                        <h3 class="sr-only"><?php the_sub_field('company_name'); ?></h3>
                        <?php endif; ?>
                    <?php if( get_sub_field('url') ): ?></a><?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php $link = get_sub_field('link'); if( $link ): ?>
        <div class="section-x-short section--flush-bottom flex flex-j-center ">
            <a class="arrow-link theme-color" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                <span><?php echo $link['title']; ?> <span class="text-bold"><?php the_sub_field('link_text_bold'); ?></span></span>
            </a>
        </div>

    <?php endif; ?>
</div>
<?php endif; ?>
