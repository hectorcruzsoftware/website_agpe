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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>
	<div class="bg-primary">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul id="header-datos">
						<li>
							<a href="tel:+ <?= TELEFONO; ?>">
								<i class="fa fa-phone" aria-hidden="true"></i><span> <?= TELEFONO_FORMATO; ?></span>
						</li>
						</a>
						<li><a href="mailto:<?= EMAIL; ?>">
								<i class="fa fa-envelope" aria-hidden="true"></i> <span><?= EMAIL; ?></span></li>
						</a>
						<li><span>Permítenos poner nuestra experiencia a tu servicio. <a href="<?= get_permalink(ID_CONTACTO); ?>">¡<span class="font-weight-bold text-secundario">Contáctanos</span>!</a></span></li>
					</ul>
				</div>

			</div>
		</div>
	</div>
	<header class="">
		<div class="container">
			<div id="wrapper-navbar">
				<a href="/" class="logo-agpe">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/agpe-contabillidad-despacho-contable-en-mazatlan-fondo-obscuro.svg" alt="" id="logo-monocolor">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/agpe-contabillidad-despacho-contable-en-mazatlan-logotipo.svg" alt="" id="logo-blue">
				</a>
				<nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
					<button id="btn-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
						<span class="icon-toggler" onclick="myFunction(this)">
							<div class="bar1"></div>
							<div class="bar2"></div>
							<div class="bar3"></div>
						</span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'include_parent' => 1,
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
	</header>
