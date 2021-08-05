<?php

/**
 * Template Name: Template Consultoría Fiscal
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
					<h1>Asesoría fiscal <br> en Mazatlán Sinaloa</h1>
					<p>Nuestra <strong>asesoría fiscal</strong> ayuda a empresas como la tuya a que puedan trabajar y cumplir con sus obligaciones fiscales e impuestos ante el SAT.</p>
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
						<h2>¿Qué es la asesoría fiscal?</h2>
						<p>
							Es la asesoría que te permite gestionar tus obligaciones tributarias e impuestos ante el <a href="https://www.sat.gob.mx/home" target="_blank" rel="noopener noreferrer">SAT</a>. Estas obligaciones fiscales aplican tanto a persona física como a persona moral y para poder aplicarse se debe tener un control de ingresos y egresos de la cuenta de tu empresa.
						</p>
						<p>
							El objetivo del <strong> asesoramiento fiscal</strong> es ayudarte a obtener beneficios y ahorros fiscales basados en la deducción de impuestos por tus ingresos y egresos permitidos por la autoridad fiscal que hayas realizado durante la operación de tu negocio.
						</p>
						<p>
							Es muy importante que esta asesoría sea de profesionales con conocimientos y experiencia en materia de contabilidad e impuestos.
						</p>
						<p>
							Por otra parte, tú como empresa asegúrate de estar al tanto de qué impuestos estás obligado a pagar, así como los periodos y montos que resulten a pagar como contribuyente.
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/asesoria-fiscal-en-mazatlan-sinaloa.jpg" alt="Asesoría fiscal en Mazatlán Sinaloa" class="img-infografia">
				</div>
			</div>


			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="preguntas">
						<h3>Preguntas frecuentes asesoría fiscal</h3>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
								¿Cuándo se necesita un asesor fiscal?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-1" aria-expanded="false" aria-controls="pregunta-frecuente-1">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-1">
								<div class="">
									No hay regla definida, pero la recomendación es que sea al iniciar operaciones de tu negocio. Esto ayudará a que no vayas generando deudas con el SAT por mala gestión de impuestos.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
								¿Qué impuestos debe pagar mi empresa o negocio?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-2" aria-expanded="false" aria-controls="pregunta-frecuente-2">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-2">
								<div class="">
									Esto depende de tu situación fiscal, el <a href="https://www.sat.gob.mx/consulta/09788/emprendedor-conoce-los-regimenes-fiscales" target="_blank" rel="noopener noreferrer">SAT</a> tiene una lista definida de las actividades y régimen fiscal en la que puedes identificarte, una vez ubicado tu caso en particular podrás consultarlo con tu contador.
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
								¿De qué manera ahorro en impuestos?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-3" aria-expanded="false" aria-controls="pregunta-frecuente-3">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-3">
								<div class="">
									Registra todos los egresos que puedes hacer deducibles en tu negocio y asegúrate de que las facturas que te emiten tus proveedores estén en regla. Esto es la base para que al momento de declarar impuestos, tu pago vaya en proporción con tus ingresos y egresos.
								</div>
							</div>
						</div>

						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
								¿Qué pasa si no declaro impuestos?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-5" aria-expanded="false" aria-controls="pregunta-frecuente-5">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-5">
								<div class="">
									El SAT tiene el control de las fechas que debes presentar tus declaraciones una vez que te hayas registrado. <br><br> Ellos te enviarán notificaciones a tu correo invitándote a cumplir con tus obligaciones fiscales. No atender estas invitaciones generará que te hagas acreedor a multas y sanciones.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
								¿Debo asistir al SAT a declarar impuestos?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-6" aria-expanded="false" aria-controls="pregunta-frecuente-6">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-6">
								<div class="">
									No es necesario, esto se puede hacer desde internet. Tu única tarea es solicitar tu acuse de pago a tu contador para hacer el pago, ya que tu contador se encargará de enviar la información necesaria al SAT.
								</div>
							</div>
						</div>
						<div class="pregunta">
							<h4 data-toggle="collapse" data-target="#pregunta-frecuente-7" aria-expanded="false" aria-controls="pregunta-frecuente-7">
								¿Cómo pago los impuestos?
								<span data-toggle="collapse" data-target="#pregunta-frecuente-7" aria-expanded="false" aria-controls="pregunta-frecuente-7">
									<i class="fa fa-chevron-right" aria-hidden="true"></i>
								</span>
							</h4>
							<div class="collapse" id="pregunta-frecuente-7">
								<div class="">
									El responsable de depositar el pago de impuestos es el cliente, el despacho contable tiene la obligación de generar el acuse de pago e informar al SAT cuanto debes pagar.
									<br><br>
									<p>
										No caigas en la mala práctica de pagarle al contador para que el "deposite al SAT", ya que esto puede ser motivo de fraude.
									</p>

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
