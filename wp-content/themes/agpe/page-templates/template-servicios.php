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
					<h1>Nuestros Servicios</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatibus velit dicta minima quo iure sed debitis nemo commodi quos voluptas, molestias ut ad magni! Laudantium et commodi repellendus ab.</p>
					<a href="#" class="btn-theme-big-icon">Ponerme en contacto</a>
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
