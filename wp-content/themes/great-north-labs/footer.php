<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Great_North_Labs
 */

?>

	</main><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper-wide">

			<ul class="secondary-navigation">
				<?php
					$primaryNav = array(
						'menu' => 'Footer Menu',
						'container_class' => false,
						'container'      => '',
						'items_wrap'    => '%3$s',
					);
					wp_nav_menu( $primaryNav );
				?>
			</ul>

			<div class="site-footer__content text-group">
				<ul class="social-list">
					<li>
						<a href="" target="_blank">
							<svg width="24" height="24"><use xlink:href="#shape-linkedin"></use></svg>
						</a>
					</li>
					<li>
						<a href="" target="_blank">
							<svg width="24" height="24"><use xlink:href="#shape-twitter"></use></svg>
						</a>
					</li>
					<li>
						<a href="" target="_blank">
							<svg width="24" height="24"><use xlink:href="#shape-youtube"></use></svg>
						</a>
					</li>
				</ul>

				<small>© <?php echo the_date('Y'); ?> Great North Labs – All Rights Reserved</small>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<div class="is-hidden">
	<?php include("app/images/svgs/svgs.svg"); ?>
</div>
</body>
</html>
