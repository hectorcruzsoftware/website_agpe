<?php

/**
 * Template Name: Template - Quienes Somos
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<section id="quienes-somos-page">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>AGPE Contabilidad</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatibus velit dicta minima quo iure sed debitis nemo commodi quos voluptas, molestias ut ad magni! Laudantium et commodi repellendus ab.</p>
					<a href="<?= get_the_permalink(ID_CONTACTO) ?>" class="btn-theme-big-icon">Ponerme en contacto</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xl-6">
					<h2>¿Quienes Somos?</h2>
					<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
					<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
					<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
				</div>
				<div class="col-sm-12 col-xl-6">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/quienes-somos-img.jpg" alt="">
				</div>
				<div class="col">
					<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
					<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="contenido" id="agpe-valores">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="valores">
						<div class="valor">
							<h3>Misión</h3>
							<p>
								Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente.
							</p>
						</div>
						<div class="valor">
							<h3>Visión</h3>
							<p>
								Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente.
							</p>
						</div>
						<div class="valor">
							<h3>Valores</h3>
							<p>
								Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contenido" id="seccion-clientes">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Clientes de Nuestro Despacho</h2>
					<p>
						Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente.
					</p>
					<div id="clientes">
						<a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/serbiomex.svg" alt=""></a>
						<a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/lavanderia.svg" alt=""></a>
						<a href="https://pcylap.com/" target="_new"><img src="<?= get_template_directory_uri(); ?>/assets/images/pcylap.svg" alt=""></a>
					</div>
					<p>
						Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
?>
