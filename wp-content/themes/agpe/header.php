<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">
		<!-- ******************* The Navbar Area ******************* -->
		<div class="bg-primary">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul id="header-datos">
							<li>
								<a href="#">
									<i class="fa fa-phone" aria-hidden="true"></i><span class="small">669 105 14 51</span>
							</li>
							</a>
							<li><a href="#">
									<i class="fa fa-envelope" aria-hidden="true"></i> <span class="small">contacto@agpecontabilidad.com</span></li>
							</a>
							<li><span class="small">Permítenos poner nuestra experiencia a tu servicio. <a href="#"><span class="font-weight-bold text-secundario">¡Contáctanos!</span></a></span></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<header>
			<div class="container">
				<div class="row align-items-center no-gutters">
					<div class="col-sm-12 col-lg-5 text-center text-lg-left">
						<a href="/" class="logo-agpe">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/logo_agpe_contabilidad.svg" alt="">
						</a>
					</div>
					<div class="col-sm-12 col-lg-7">
						<div id="wrapper-navbar" class="mt-md-3 mt-lg-0">
							<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">
								<button class="navbar-toggler mt-md-5" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
									<span class="navbar-toggler-icon"></span>
								</button>
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => 'collapse navbar-collapse',
										'container_id'    => 'navbarNavDropdown',
										'menu_class'      => 'navbar-nav',
										'fallback_cb'     => '',
										'menu_id'         => 'main-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker()
									)
								);
								?>
							</nav><!-- .site-navigation -->
						</div><!-- #wrapper-navbar end -->
					</div>
				</div>
			</div>
		</header>
