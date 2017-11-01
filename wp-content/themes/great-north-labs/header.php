<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/app/images/favicons/favicon.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/app/images/favicons/apple-touch-icon.png" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/app/images/favicons/android-favicon.png">

	<?php wp_head(); ?>
</head>

<?php
	global $post;
	$post_slug=$post->post_name;
	$bodyClass = $post_slug;
?>

<body <?php body_class($bodyClass); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'great-north-labs' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="wrapper-wide">
			<h1 class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="sr-only"><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></span>
					<img src="<?php echo get_template_directory_uri(); ?>/app/images/Great-North-Labs-logo-white.svg" alt="<?php bloginfo( 'name' ); ?> logo" />
				</a>
			</h1>

			<nav id="site-navigation" class="main-navigation">
				<span class="mobile-nav-logo"><img src="<?php echo get_template_directory_uri(); ?>/app/images/Great-North-Labs-logo-white.svg" alt="<?php bloginfo( 'name' ); ?> logo" /></span>
				<ul>
					<?php
						$primaryNav = array(
							'menu' => 'Main Menu',
							'container_class' => false,
							'container'      => '',
							'items_wrap'    => '%3$s',
						);
						wp_nav_menu( $primaryNav );
					?>
				</ul>

				<ul class="main-navigation__secondary has-accent">
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
			</nav>
		</div>

		<div class="burger js-toggle-mobile-nav">
			<span class="sr-only">toggle mobile nav</span>
			<div class="burger-inner">
				<span class="burger-top"></span>
				<span class="burger-middle"></span>
				<span class="burger-bottom"></span>
			</div>
		</div>
	</header>




	<main id="content" class="site-content fade-in">
