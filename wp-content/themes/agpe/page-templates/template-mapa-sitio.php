<?php

/**
 * Template Name: Template - Mapa del sitio
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?><section id="sitio-mapa">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Mapa del sitio web</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Menu principal </h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'primary',
						'fallback_cb' => '',
						'container_id' => '',
						'container_class' => '',
						'menu_id' => '',
						'depth' => 2
					));
					?>
					<h2>Sitios de interés </h2>
					<?php wp_nav_menu(array(
						'theme_location' => 'sitios-interes',
						'fallback_cb' => '',
						'container_id' => '',
						'container_class' => '',
						'menu_id' => '',
						'depth' => 1
					));
					?>
					<h2>Contacto y aviso de privacidad</h2>
					<ul>
						<li><a href="<?= GOOGLE_MAPS; ?>" target="_new"><?= DIRECCION; ?></a></li>
						<li><a href="tel:+<?= TELEFONO; ?>" target="_new">Teléfono de oficina: <?= TELEFONO; ?></a></li>
						<li><a href="<?= WHATSAPP_MENSAJE_LINK; ?>" target="_new">Teléfono de WhatsApp: <?= WHATSAPP; ?></a></li>
						<li><a href="mailto:<?= EMAIL; ?>" target="_new">Correo de contacto: <?= EMAIL; ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section><?php get_footer();
