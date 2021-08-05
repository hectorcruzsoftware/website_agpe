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
					<h1>Despacho contable <br> AGPE Contabilidad</h1>
					<p>
						Somos un <strong>despacho contable</strong> en Mazatlán Sinaloa, con más de 5 años de experiencia asesorando a empresas en sus necesidades contables.
					</p>
					<a href="<?= get_the_permalink(ID_CONTACTO) ?>" class="btn-theme-big-icon">Ponerme en contacto</a>
				</div>
			</div>
		</div>
	</div>
	<div class="contenido">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xl-6">
					<h2>Nuestro despacho contable</h2>
					<p>
						<strong>AGPE Contabilidad</strong> cuenta con experiencia, conocimiento y contactos clave para que nuestros clientes logren la tranquilidad y se enfoquen  al 100% en sus negocios.
					</p>
					<p>
						Nuestro <strong>despacho contable</strong> nació en Mazatlán Sinaloa en 2016, desde entonces hemos enfocado nuestra energía en abarcar las problemáticas de la industria y las empresas. 
					</p>
					<p>
						Nos gustan las buenas prácticas y las cuentas claras. En <strong>AGPE Contabilidad</strong> siempre te tendremos al tanto de tus derechos como negocio, así como los pagos e impuestos que estás pagando y siempre podrás corroborarlos en el momento que así lo necesites.
					</p>
					<p>
						Pueden haber muchos <strong>despachos contables en Mazatlán Sinaloa</strong>, pero la confianza que tendrás con AGPE Contabilidad no se consigue en todos lados. 
					</p>
				</div>
				<div class="col-sm-12 col-xl-6">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/despacho-contable-en-mazatlan-sinaloa.jpg" alt="Despacho contable AGPE Contabilidad">
				</div>
				<div class="col">
					<p>
						Cada cliente que atendemos es diferente. Por lo que nos comprometemos para ayudarte a lograr tus metas. Para ello disponemos de un equipo completo y capacitado para orientarte en temas de  asesoría fiscal, contable, administrativa, situación fiscal y te proveemos las herramientas más modernas y tecnológicas para el control de tu empresa.
					</p>
					<p>
						El núcleo de nuestro trabajo se enfoca en ganar la confianza que las empresas necesitan para tener la seguridad y satisfacción de que sus intereses están en manos profesionales y lograr convertirnos en socios a largo plazo.
					</p>
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
								Proveer a las empresas con las mejores estrategias y herramientas contables para que alcancen sus objetivos de negocio, aprovechando al máximo la tecnología y el talento humano.
							</p>
						</div>
						<div class="valor">
							<h3>Visión</h3>
							<p>
								Ser un despacho contable reconocido en Sinaloa  por la eficiencia e innovación de nuestros servicios.
							</p>
						</div>
						<div class="valor">
							<h3>Valores</h3>
							<p>
								Nuestra bandera es la confianza y la honestidad. Nuestro compromiso es llevar siempre las mejores prácticas de nuestra profesión de manera transparente, ética y con entusiasmo.
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
					<h2>Algunos clientes de nuestro despacho contable</h2>
					<p>
						Nuestros clientes son empresas de distintos giros. Desde joyería, clínicas dentales, proveedores de equipo biomédico, desarrolladores de software, sector alimenticio, construcción  y asesoramos a emprendedores para que puedan comenzar sus negocios.
					</p>
					<div id="clientes">
						<a href="https://www.facebook.com/serbiomexstore" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/images/serbiomex.svg" alt="Equipo médico Serbiomex"></a>
						<a href="https://www.facebook.com/LavanderiasRevolucion" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/images/lavanderia.svg" alt="Lavendería Revolución"></a>
						<a href="https://pcylap.com/" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/images/pcylap.svg" alt="Pcylap tecnologías"></a>
						<a href="https://www.facebook.com/MispepperReposteria" target="_blank" rel="noopener noreferrer"><img src="<?= get_template_directory_uri(); ?>/assets/images/mispepper.svg" alt="Repostería Mispepper"></a>
					</div>
					<p>
						<strong>¡Faltas tú con tu empresa o tu nuevo emprendimiento!</strong> Acercate a nosotros y cuéntanos sobre tu negocio para que te orientemos contablemente en alcanzar tus objetivos.
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
