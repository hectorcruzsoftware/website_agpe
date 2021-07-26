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
					<h1>Contacto con AGPE Contabilidad</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatibus velit dicta minima quo iure sed debitis nemo commodi quos voluptas, molestias ut ad magni! Laudantium et commodi repellendus ab.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="card-servicio">
						<h2>¿Quieres información de inmediato?</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore iure quod perferendis laboriosam voluptatum minus, facilis dolores mollitia repellat officiis ipsa. Eius voluptates modi perferendis nobis, vel exercitationem tenetur earum?
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore iure quod perferendis laboriosam voluptatum minus, facilis dolores mollitia repellat officiis ipsa. Eius voluptates modi perferendis nobis, vel exercitationem tenetur earum?
						</p>

					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/img-contacto.jpg" alt="" class="img-infografia">
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
