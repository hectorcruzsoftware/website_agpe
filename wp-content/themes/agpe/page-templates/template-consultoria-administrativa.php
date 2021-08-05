<?php

/**
 * Template Name: Template Consultoría Administrativa
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section id="servicio-page">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Asesoría administrativa <br> en Mazatlán Sinaloa</h1>
					<p>
						Con nuestra <strong>asesoría administrativa</strong> no tendrás que preocuparte por llevar un control eficiente de los recursos de toda tu empresa, ya que eso será nuestro principal trabajo.
					</p>
					<a href="<?= get_the_permalink(ID_CONTACTO) ?>" class="btn-theme-big-icon">Ponerme en contacto</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="card-servicio">
						<h2>¿Qué es la asesoría administrativa?</h2>
						<p>
							Es el tipo de <strong>asesoría</strong> que los negocios aprovechan para hacer que sus empresas trabajen de la manera más organizada posible y aprovechando al máximo los recursos y el desempeño de su personal.
						</p>
						<p>
							El objetivo de nuestra <strong>asesoría administrativa</strong>, es apoyarte para que tu empresa optimice sus procesos de trabajo, determine claramente las funciones de cada integrante de tu equipo, proveerte con las herramientas más adecuadas para el control de tus operaciones y apoyarte para lograr el mejor flujo de trabajo tanto con tus clientes como tus proveedores.
						</p>
						<p>
							Te ayudaremos a mejorar tus procesos para que tú y tus socios puedan llevar a cabo mejor toma de decisiones en cuanto al manejo de los recursos en la empresa. Además, estarás tranquilo al saber que estás cumpliendo con las autoridades que regulan los derechos del trabajador como <a href="http://www.imss.gob.mx/" target="_blank" rel="noopener noreferrer">seguro social</a>, <a href="https://portalmx.infonavit.org.mx/wps/portal/infonavit.web/patrones/!ut/p/z1/hY-9DoIwEICfxYGVHj8ScKsGi5VAHIjYxYDBggFKAOH1BWUxEbzt7r7vfhBDIWJl1GU8ajNRRvmQX5hxVU0AsgXFI6ZjAt7bB9tyNZUogM7_ADa0DQLg7HTF8y1qwOnoEV83KKWuNvkLwOjDTOBxP3sjcxcEygQszKCI8VzEn3dxGWsmR6xO7kmd1PKzHspp21bNRgIJ-r6XuRA8T-SbKCT4paSiaVH4TaKqCEJ4rPPOxasXvmcXCw!!/dz/d5/L2dJQSEvUUt3QS80TmxFL1o2XzZHMDBIQzQxTkdKMDIwUU9CVFBVMkJKQ080/" target="_blank" rel="noopener noreferrer">Infonavit</a>, etc.
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/asesoria-administrativa-en-mazatlan-sinaloa.jpg" alt="Asesoría administrativa en Mazatlán Sinaloa | <?= get_bloginfo('name'); ?>" class="img-infografia">
				</div>
			</div>


			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="preguntas">
						<h3>Preguntas frecuentes sobre esta asesoría</h3>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
								¿Cuándo se necesita este tipo de servicio?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-1">
								<div class="">
									Cuando quieres que tu negocio trabaje de manera organizada. Es decir, tener un manual definido de puestos, procesos, estructura y jerarquías de trabajo, horarios, derechos, obligaciones y relación ante clientes y proveedores.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
								¿Aplica solo para empresas grandes?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-2">
								<div class="">
									El control administrativo no depende del tamaño de la empresa, sino que ayuda a las empresas a que se organicen de manera eficiente y puedan seguir creciendo.
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
								¿Qué beneficio tengo como negocio?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-3">
								<div class="">
									<strong>Eficiencia</strong>, en todos los sentidos. trabajar de manera organizada donde un profesional te ayude a definir tareas, procesos y optimizar tus tiempos de producción es la forma más fácil de aprovechar al máximo cada recurso que tiene tu negocio.
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
								¿Cómo se contrata este servicio?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-5">
								<div class="">
									<strong>AGPE Contabilidad</strong> está a tu disposición para apoyarte en tu negocio. Puedes contactarnos mediante este sitio web, donde te dejamos todos nuestros datos. También, puedes visitarnos en nuestra oficina si así lo deseas.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
								¿Qué costo tiene?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-6">
								<div class="">
									<strong>AGPE Contabilidad</strong> te apoya con un periodo <strong>GRATIS</strong> de un mes, el cual aprovechamos para analizar el estado actual de tu negocio y hacer el presupuesto mensual por nuestros servicios.
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<?php
					get_template_part('templates_parts_site/card_contador');
					?>
					<section id="otros-servicios">
						<h2>Más Servicios</h2>
						<?php
						get_template_part('templates_parts_site/servicios');
						?>
					</section>
				</div>
			</div>


		</div>
	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
