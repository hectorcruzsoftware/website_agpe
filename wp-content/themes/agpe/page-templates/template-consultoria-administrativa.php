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
					<h1>Servicio de Contabilidad en Mazatlán</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias voluptatibus velit dicta minima quo iure sed debitis nemo commodi quos voluptas, molestias ut ad magni! Laudantium et commodi repellendus ab.</p>
					<a href="#" class="btn-theme-big-icon">Ponerme en contacto</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-8">
					<div class="card-servicio">
						<h2>¿Qué es este servicio?</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore iure quod perferendis laboriosam voluptatum minus, facilis dolores mollitia repellat officiis ipsa. Eius voluptates modi perferendis nobis, vel exercitationem tenetur earum?
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore iure quod perferendis laboriosam voluptatum minus, facilis dolores mollitia repellat officiis ipsa. Eius voluptates modi perferendis nobis, vel exercitationem tenetur earum?
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore iure quod perferendis laboriosam voluptatum minus, facilis dolores mollitia repellat officiis ipsa. Eius voluptates modi perferendis nobis, vel exercitationem tenetur earum?
						</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-4">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/servicio1.jpg" alt="" class="img-infografia">
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
