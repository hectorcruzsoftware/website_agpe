<?php

/**
 * Template Name: Template - Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<section id="banner">
	<div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="datos-banner">
						<h1>Despacho Contable en <br>
							<span>Mazatlán Sinaloa</span>
						</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit
							mauris donec sit morbi eget aliquam molestie. Molestie
							libero nam in tempus, faucibus.
						</p>
						<a href="#">Ponenerme en contacto</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div id="cards">
					<div>
						<div class="contador-actualizado">
							<div class="contenido">
								<h3>
									Contadores Actualizados
								</h3>
								<p>
									Aplicamos un modelo de negocio contable vigente, mediante operaciones innovadoras que nos ayudan a mantener actualizada tu empresa para ir un paso adelante de las eventualidades financieras.
								</p>
							</div>

						</div>
						<div class="contador-comprometido">
							<div class="contenido">
								<h3>
									Comprometidos con tu empresa
								</h3>
								<p>
									Tenemos más de 10 años de experiencia en materia fiscal y contable por ello nos hemos convertido en los aliados en contabilidad de múltiples empresas, gracias al compromiso que ponemos en cada proyecto.
								</p>
							</div>
						</div>
						<div class="contador-confianza">
							<div class="contenido">
								<h3>
									Equipo de Confianza
								</h3>
								<p>
									A través de cada uno de nuestros servicios, brindamos una atención puntual y personalizada para garantizar resultados que se reflejan en el crecimiento y la rentabilidad de tu empresa.
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="home-quienes-somos">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/quienes-somos.svg" alt="">
			</div>
			<div class="col-sm-12 col-md-6">
				<h2>
					¿Quienes Somos?
				</h2>
				<p>
					Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.
				</p>
				<p>
					Ante los constantes cambios en las reformas fiscales, nace Despacho Contable México (DCM), un grupo de contadores públicos totalmente profesionales en la Ciudad de México, quienes compartimos como misión laboral la firme convicción de ofrecer soluciones efectivas y asesoramiento contable y fiscal a cada uno de nuestros clientes, bajo la garantía de recibir una atención personalizada y especializada.
				</p>
				<p>
					Nuestra experiencia en el ramo de la contabilidad en México nos ha otorgado la capacidad de facilitar las relaciones que involucran al fisco y a los contribuyentes. Nuestra calidad, honestidad, confidencialidad, integridad y constancia nos han llevado a mantener una línea de trabajo comprometida y transparente. </p>
				<a href="#">
					Conocer Más
				</a>
			</div>
		</div>
	</div>
</section>





<div class="container">
	<div class="row">
		<div class="col ">
			<?php
			for ($i = 0; $i < 0; $i++) {
				# code...
			?>
				<p class="bg-warning">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. At cum consectetur minima magni temporibus dignissimos est veniam eius harum neque facere, explicabo fuga odit laborum doloremque earum vel! Adipisci, voluptatem?
				</p>
			<?php
			}
			?>
		</div>
	</div>

</div>
<?php
get_footer();
