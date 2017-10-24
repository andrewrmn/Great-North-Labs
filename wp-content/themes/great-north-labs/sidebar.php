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
	<div class="block">
		<h3 class="h3">Join Our Newsletter</h3>
		<p class="p-sm">Sign up to receive the latest updates from Great North Labs right to your inbox.</p>

		<form class="form newsletter-form text-group section-short section--flush-bottom" action="" method="POST" validate>
			<div class="field-wrap">
				<label for="email" class="sr-only">Email</label>
				<input type="email" placeholder="enter email" name="email" id="email" />
			</div>

			<div class="section-short section--flush-bottom">
				<button type="submit" class="btn-dark">Subscribe</button>
			</div>
		</form>



	</div>


</aside><!-- #secondary -->
