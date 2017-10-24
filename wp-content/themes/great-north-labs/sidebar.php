<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Great_North_Labs
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}

?>

<aside class="sidebar">
	<?php// dynamic_sidebar( 'sidebar-1' ); ?>
	<div class="<?php if (is_home()): ?>block<?php else: ?>newsletter-wrap<?php endif; ?>">
		<?php if (!is_home()): ?><div class="wrapper"><?php endif; ?>
			<?php if (is_home()): ?>
			<h4 class="h3">Join Our Newsletter</h4>
			<p class="p-sm">Sign up to receive the latest updates from Great North Labs right to your inbox.</p>
			<?php else: ?>
				<h4 class="h2">Stay Updated</h4>
			<?php endif; ?>

			<form class="form newsletter-form <?php if(is_home()): ?>text-group section-short section--flush-bottom<?php else: ?>newsletter-form-inline<?php endif; ?>" action="" method="POST" validate>
				<div class="field-wrap">
					<label for="email" class="sr-only">Email</label>
					<input type="email" placeholder="enter email" name="email" id="email" required />
				</div>

				<div class="section-short section--flush-bottom">
					<button type="submit" class="<?php if (is_home()): ?>btn-dark<?php else: ?>btn<?php endif; ?>">Subscribe</button>
				</div>
			</form>
		<?php if (!is_home()): ?></div><?php endif; ?>
	</div>
</aside><!-- #secondary -->
