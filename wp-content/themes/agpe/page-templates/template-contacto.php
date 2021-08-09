<?php

/**
 * Template Name: Template Contacto
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section id="contacto-page">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>CONTACTO</h1>
					<p>Te dejamos nuestros datos de contacto. Esperamos ser parte de tu empresa y tu equipo muy pronto.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="card-servicio">
						<h2>¿Quieres ponerte en contacto de inmediato?</h2>
						<p>
							Si necesitas asesoría sobre contabilidad o alguno de nuestros servicios puedes dejarnos un mensaje desde nuestro formulario de contacto. Por lo general <strong>lo respondemos en un plazo no mayor a 1 día hábil</strong>.
						</p>
						<p>
							Si gustas también puedes ponerte en contacto más rápidamente a través de nuestro <strong>Número de WhatsApp</strong> o marcando nuestro <strong>Número telefónico</strong> que atendemos en horarios de trabajo.
						</p>
						<p>
							También puedes <strong>visitar nuestra oficina</strong> donde podremos atenderte con gusto.
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/contador-en-mazatlan-sinaloa.jpg" alt="Contador Público en Mazatlán Sinaloa | Benjamín Aguirre" class="img-infografia">
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
