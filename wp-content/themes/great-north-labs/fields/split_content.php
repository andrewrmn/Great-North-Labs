<?php
/**
* Split Content
*
* @package Great_North_Labs
*/
$col1 = 'col--md--6';
$col2 = 'col--md--6';
$image = get_sub_field('image');

if ( get_sub_field('image_on_right') ) {

}
?>

<div>


<?php if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>

<?php if(get_sub_field('title')): ?>
<div class="h4"><?php the_sub_field('title'); ?></div>
<?php endif; ?>

<?php if(get_sub_field('number')): ?>
<div class="h4"><?php the_sub_field('number'); ?></div>
<?php endif; ?>

<?php if(get_sub_field('headline')): ?>
<h3 class="h4"><?php the_sub_field('headline'); ?></h3>
<?php endif; ?>

<?php if(get_sub_field('body')): ?>
<div class="user-content"><?php the_sub_field('headline'); ?></div>
<?php endif; ?>


<?php $link = get_sub_field('link'); if( $link ): ?>
    <a class="arrow-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
        <span><?php echo $link['title']; ?><span class="text-bold"><?php the_sub_field('link_bold_text'); ?></span></span>
    </a>
<?php endif; ?>
</div>
