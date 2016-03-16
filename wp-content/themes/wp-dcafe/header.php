<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" id="ie-media-css"  href="<?php echo get_template_directory_uri(); ?>/assets/css/foundation-ie.min.css" type="text/css" media="all" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<div class="site-branding large-6 columns">
					<h1 class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="wpd-cafe" />
						</a>
					</h1>
				</div>
				<div class="site-address large-6 columns">
					<div class="genericon genericon-time"></div>Open: 10:00 〜 22:00<br />Last Order: 21:30
				</div>
			</div>
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<h1 class="menu-toggle text-right">
					<div class="genericon genericon-menu"></div>
				</h1>
				<div class="row">
					<div class="large-12 columns">
						<?php wp_nav_menu( array( 'theme_location' =>'primary' ) ); ?>
					</div>
				</div>
			</nav>
			<!-- #site-navigation -->
		</header>
		<!-- #masthead -->
<?php if ( is_home() || is_front_page() ) : ?>
		<div id="main-img">
			<img src="<?php header_image(); ?>" alt="" />
		</div>
<?php endif; ?>
<?php if ( ! is_front_page() ) : ?>
		<div id="main" class="site-main row">
<?php endif; ?>