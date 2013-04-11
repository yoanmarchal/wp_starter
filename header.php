<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _trs
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

	<?php do_action( 'before' ); ?>
	<header id="header" class="header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', '_trs' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', '_trs' ); ?>"><?php _e( 'Skip to content', '_trs' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #header -->

	<div id="main" class="site-main">
