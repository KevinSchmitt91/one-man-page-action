<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KS_landing_page
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Bootstrap core CSS -->
<link href="<?php bloginfo('stylesheet_directory')?>/assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/custom.css" />

<!-- Link Effects -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/css/linkeffects.css" />

<!-- FontAwesome Icons -->
<link href="<?php bloginfo('stylesheet_directory')?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'one-man-company-action' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- Header -->
		<section id="page-header">
			<div class="page-header-header">
				<div class="container">
					<div class="social-links">
						<i class="social-desc">Besuchen Sie uns auf:    </i>
						<a href="http://twitter.com/kevinschmitt91" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="http://facebook.com/kevinschmitt.16" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/channel/UCwuOyj8iCjsnrg6bxDpxifQ" target="_blank"><i class="fa fa-youtube"></i></a>
					</div><!--social-links -->
				</div><!--container -->
			</div><!-- page-header-header -->
      <div class="container">
				<div class="col-sm-6 col-xs-12 page-header-wrapper">
					<img class="page-header-img" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.png" alt="page-logo" />
				</div>
				<div class="hide-mobile">
					<div class="col-sm-3 col-xs-6 page-header-wrapper">
						<div class="page-header-section">
							<p>Sie haben noch fragen?</p>
	            <p><a href="mailto:ich@kevinschmitt.info">ich@kevinschmitt.info</a></p>
						</div><!-- page-header-section -->
					</div>
				</div><!-- hide-mobile -->
				<div class="hide-mobile">
					<div class="col-sm-3 col-xs-6 page-header-wrapper">
						<div class="page-header-section">
							<p>Oder rufen Sie einfach an!</p>
							<p><a href="tel:017630443440">0176 / 30443440</a></p>
						</div><!-- page-header-section -->
					</div>
				</div><!-- hide-mobile -->
      </div>
		</section> <!-- page-header -->

		<!-- NAVBAR -->
		<div id="navbar-anchor"></div>
			<nav id="bsNav" class="navbar navbar-inverse navbar-fixed" role="navigation">

				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" onclick="openNav()">
							<span class="sr-only">Toggle navigation</span>
							<span class="fa fa-bars"></span>
						</button>
						<a class="navbar-brand page-scroll" href="#page-header"><img src="<?php bloginfo('stylesheet_directory')?>/assets/img/brand.png" alt="Logo-simple"/></a>
					</div><!-- navbar-header -->
					<?php
						wp_nav_menu( array(
							'theme_location'	=> 'primary',
							'container'			=> 'nav',
							'container_class'	=> 'navbar-collapse collapse cl-effect-17',
							'menu_class'		=> 'nav navbar-nav navbar-right'
						));
					?>
				</div><!-- container -->
			</nav><!-- navbar -->
			<!-- OVERLAY NAVBAR -->
			<div id="myNav" class="overlay">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <div class="overlay-content">
			    <a class="page-scroll" href="#service" onclick="closeNav()">Service</a>
			    <a class="page-scroll" href="#about" onclick="closeNav()">Prozess</a>
			    <a class="page-scroll" href="#team" onclick="closeNav()">Portfolio</a>
			    <a class="page-scroll" href="#contact" onclick="closeNav()">Kontakt</a>
			  </div><!-- overlay-content -->
			</div><!-- myNav -->

			<!-- Back-To-Top-Anchor -->
			<div id="top-anchor"></div>
