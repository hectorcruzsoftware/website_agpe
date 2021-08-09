<?php

/**
 * Template Name: Template - Servicios
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section id="servicios-page">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Servicios de AGPE Contabilidad</h1>
					<p>
						Consulta los <strong>servicios de AGPE Contabilidad</strong>, ponemos a tú disposición toda nuestra experiencia en contabilidad para el bienestar de tu negocio.
					</p>
					<a href="<?= get_the_permalink(ID_CONTACTO) ?>" class="btn-theme-big-icon">Ponerme en contacto</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					get_template_part('templates_parts_site/servicios');
					?>
				</div>
			</div>
		</div>

	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
