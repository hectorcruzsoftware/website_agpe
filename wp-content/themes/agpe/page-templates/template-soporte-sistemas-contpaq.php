<?php

/**
 * Template Name: Template Soporte en sistemas contpaq
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
					<h1>Sistemas de contabilidad <br> CONTPAQi <br> en Mazatlán Sinaloa</h1>
					<p>
						Más de 3 años siendo distribuidores autorizados de licencias, soporte e instalación de sistemas de contabilidad CONTPAQi.
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
						<h2>¿Te ayudamos con tus sistemas de contabilidad CONTPAQi?</h2>
						<p>
							Sin duda para nosotros las empresas, CONTPAQi es la herramienta que mejor se ajusta a nuestras labores de contabilidad.
						</p>
						<p>
							Con CONTPAQi puedes llevar el control integral de tu administración, compras, facturas, inventarios, cuentas por cobrar y pagar en tu empresa.
						</p>
						<p>
							En AGPE Contabilidad somo distribuidores autorizados de CONTPAQI en Mazatlán Sinaloa y apoyamos a empresas como la tuya para que faciliten su contabilidad.
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/sistemas-de-contabilidad-contpaqi-en-mazatlan-sinaloa.jpg" alt="Sistemas de contabilidad CONTPAQi en Mazatlán Sinaloa" class="img-infografia">
				</div>
			</div>
			<div class="row">
				<div class="col-12">

					<h2 class="header-contpaqi">Precios de CONTPAQi 2021 en Mazatlán Sinaloa</h2>
					<div class="contpaqi">
						<?php
						for ($i = 0; $i < 8; $i++) {

						?>
							<table>
								<thead>
									<tr>
										<th colspan="2">
											<img src="<?= get_template_directory_uri(); ?>/assets/images/contpaqi/precio_de_contpaqi_contabilidad_mazatlan_sinaloa.png" alt="Precio de CONTPAQi Contabilidad en Mazatlán Sinaloa" class="img-infografia">
										</th>
										<th>Precio base para <br> 1 usuario</th>
										<th>Precio por usuario adicional <br> en red</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="2" class="blue-light">
											LICENCIAMIENTO <br>
											ANUAL
										</td>
										<td>
											Licencia nueva
										</td>
										<td>
											$4,190.00
										</td>
										<td>
											$1,190.00
										</td>
									</tr>
									<tr>
										<td>
											Renovación
										</td>
										<td>
											$4,090.00
										</td>
										<td>
											$1,190.00

										</td>
									</tr>
									<tr>
										<td rowspan="3" class="blue-dark">
											LICENCIAMIENTO <br>
											TRADICIONAL

										</td>

										<td>
											<strong>Actualización</strong>
										</td>
										<td>
											<strong>$5,190.00</strong>
										</td>
										<td>
											<strong>$1,290.00</strong>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Actualización especial</strong>
										</td>
										<td>
											<strong>$4,290.00</strong>
										</td>
										<td>
											<strong>$1,190.00</strong>
										</td>
									</tr>
									<tr>
										<td>
											Usuario adicional <br>
											<span class="small">(solo en crecimiento de usuario)</span>
										</td>
										<td>
											N/A
										</td>
										<td>
											$1,890.00
										</td>
									</tr>

								</tbody>
								<tfoot>
									<tr>
										<td colspan="4">
											Para contadores, fiscalistas, auditores, administradores y directores de todo perfil de empresas.
										</td>
									</tr>
								</tfoot>
							</table>
						<?php

						}
						?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="preguntas">
						<h3>Preguntas frecuentes</h3>
						<?php
						for ($i = 0; $i < 7; $i++) {
						?>

							<div class="pregunta">
								<h5>
									<?= $i + 1; ?>. sobre el servicio
									<span data-toggle="collapse" data-target="#collapseExample<?= $i; ?>" aria-expanded="false" aria-controls="collapseExample<?= $i; ?>">
										<i class="fa fa-chevron-right" aria-hidden="true"></i>
									</span>
								</h5>
								<div class="collapse" id="collapseExample<?= $i; ?>">
									<div class="">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>


				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<section class="card-contador">
						<h5>Más información</h5>
						<div class="datos">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/benjamin.jpg" alt="">
							<div class="info">
								<p>L.C.P. Benjamin Aguirre <a href="#">Contactar</a></p>
								<p>Ingeniero electrónico, de sistemas y magister en ingeniería de sistemas. Profesor catedrático en ciencias de la computación, los</p>
							</div>
						</div>

					</section>
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
