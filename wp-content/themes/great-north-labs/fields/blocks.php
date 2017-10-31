<?php
/**
* Banner
*
* @package Great_North_Labs
*/
$headline = get_sub_field('headline');
$col = 'col--xs--12 col--sm--3';
$wrapper = 'wrapper wrapper--md';

if( get_sub_field('block_per_row') == '2'){
    $col = 'col--xs--12 col--sm--6';
    $wrapper = 'wrapper';
}
if( get_sub_field('block_per_row') == '3'){
    $col = 'col--xs--12 col--sm--4';
    $wrapper = 'wrapper';
}
?>

<?php if( have_rows('blocks') ): ?>
<div class="wrapper-full section bg-white">
    <?php if($headline): ?>
        <header class="wrapper text-center">
            <h3 class="h2"><?php echo $headline; ?></h3>
        </header>
    <?php endif; ?>

    <div class="<?php echo $wrapper; ?> section section--flush-bottom">
        <div class="row">
            <?php while ( have_rows('blocks') ) : the_row(); ?>
                <div class="<?php echo $col; ?>">
                    <div class="text-group-tall">
                        <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                        <div class="text-group">
                            <div class="text-group-short">
                                <?php if(get_sub_field('headline')): ?>
                                <h3 class="h3 <?php if( !empty($image) ){ ?>has-accent<?php } ?>"><?php the_sub_field('headline'); ?></h3>
                                <?php endif; ?>
                                <?php if(get_sub_field('sub_headline')): ?>
                                <h3 class="h4"><?php the_sub_field('sub_headline'); ?></h3>
                                <?php endif; ?>
                            </div>

                            <?php if(get_sub_field('body')): ?>
                            <div class="user-content user-content--sm"><?php the_sub_field('body'); ?></div>
                            <?php endif; ?>
                        </div>

                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php endif; ?>
