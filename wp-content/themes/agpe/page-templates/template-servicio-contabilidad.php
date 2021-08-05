<?php

/**
 * Template Name: Servicio de Contabilidad
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
					<h1>Asesoría contable <br> en Mazatlán Sinaloa</h1>
					<p>
						Con nuestra <strong>asesoría contable</strong> garantizamos que tu negocio o actividad puede trabajar y crecer sin conflictos con las autoridades.
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
						<h2>¿Qué es la asesoría contable?</h2>
						<p>
							Es la asesoría que toda actividad que se haga llamar empresa o negocio debe considerar para trabajar en regla con el SAT y poder crecer.
						</p>
						<p>
							En <strong>AGPE Contabilidad</strong> nos encargamos de prestar los servicios relacionados al registro mercantil de tu empresa o actividad. En otras palabras, llevamos a cabo un análisis de las intenciones y objetivos de tu empresa para determinar los detalles de su constitución legal ante el SAT y el tipo de contribuyente que mejor te conviene, ya sea persona física o persona moral.
						</p>
						<p>
							Una vez constituida tu actividad ante las autoridades, con nuestra <strong>asesoría contable</strong> no tendrás que preocuparte del registro y control de las operaciones que realiza tu empresa. Ya que tu facturación de ingresos y egresos serán parte de nuestro trabajo mientras que tu te dedicas a tu negocio.
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/asesoria-contable-en-mazatlan-sinaloa.jpg" alt="AGPE CONTABILIDAD | Despacho contable en Mazatlán Sinaloa" class="img-infografia">
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="preguntas">
						<h3>Preguntas comunes sobre la asesoría contable</h3>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
								¿Cuándo necesito asesoría contable?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-1">
								<div class="">
									Cuando vas a iniciar un negocio y no sabes que requisitos te pide la autoridad para iniciar operaciones. Esto varía según tu actividad o giro de negocio.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
								¿Cómo me registro mi negocio en el SAT?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-2">
								<div class="">
									Una vez que ya sabes que régimen fiscal te conviene, se debe <a href="https://citas.sat.gob.mx/citasat/agregarcita.aspx" target="_blank" rel="noopener noreferrer"><strong>agendar una cita en el SAT</strong></a> para obtener la firma electrónica. Esta firma es la base para realizar otros trámites y poder emitir facturas a tus clientes. </div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
								¿Qué régimen fiscal me conviene más?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-3">
								<div class="">
									Depende de tu actividad, profesión y tamaño de negocio, para ello el SAT tiene un <a href="https://www.sat.gob.mx/consulta/09788/emprendedor-conoce-los-regimenes-fiscales" target="_blank" rel="noopener noreferrer"><strong>catálogo</strong></a> de regímenes fiscales donde puedes identificar tu caso en particular. Es recomendable que esto lo hagas con asesoría contable profesional. </div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
								¿Qué pasa si no registro mi negocio ante el SAT?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-5">
								<div class="">
									Primero que nada estás limitando el crecimiento de tu empresa por que no podrás emitir facturas a tus clientes. Por otro lado el SAT te invitará a regularizar tu negocio e incluso aplicará las multas y clausuras correspondientes. <strong>¡Todos debemos estar registrados si queremos crecer!</strong>
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
								¿Tiene algún costo registrarme ante el SAT?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-6">
								<div class="">
									Todos los trámites ante el SAT son gratis. Al contratar la asesoría contable de <strong>AGPE Contabilidad</strong> nos encargaremos de que tu trámite sea lo más fácil y rápido posible.
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-4" aria-expanded="false" aria-controls="pregunta-frecuente-4">
								¿Qué debo pagar cuando ya estoy registrado en el SAT?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-4" aria-expanded="false" aria-controls="pregunta-frecuente-4">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-4">
								<div class="">
									Una vez que ya estás registrado, necesitas los servicios de un contador para que lleve a cabo el control de tus operaciones y haga tu declaración de impuestos. Las tarifas de este servicio varían según tu régimen fiscal y tus impuestos se calculan en base a tus operaciones realizadas durante tu periodo de operación.
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
