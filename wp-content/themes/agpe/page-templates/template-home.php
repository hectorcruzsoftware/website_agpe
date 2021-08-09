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
						<h1>Contador público en <br>
							<span>Mazatlán Sinaloa</span>
						</h1>
						<p>
							¿Buscas un <strong>contador público</strong>? Te asesoramos en tu contabilidad para que te dediques solamente a impulsar tu negocio o emprendimiento.
						</p>
						<a href="<?= get_permalink(ID_CONTACTO) ?>">Ponenerme en contacto</a>
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
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<h3>
									Contador Público
								</h3>
								<p>
									Con experiencia en negocios de distintos giros, como tecnológicos, alimenticios, construcción, servicios de la salud, empresas de servicios y también asesorando a emprendedores independientes de distintos sectores.
								</p>
							</div>

						</div>
						<div class="contador-comprometido">
							<div class="contenido">
								<i class="fa fa-hand-paper-o" aria-hidden="true"></i>
								<h3>
									Comprometido con tu empresa </h3>
								<p>
									Como emprendedor y <strong>contador público</strong>, sé que sacar adelante una empresa es una tarea muy demandante. Con nosotros tendrás la seguridad de que tu empresa está en regla con el SAT, mientras tu te enfocas en hacer crecer tu negocio.
								</p>
							</div>
						</div>
						<div class="contador-confianza">
							<div class="contenido">
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
								<h3>
									Equipo de Confianza
								</h3>
								<p>
									Nuestro equipo es 100% profesional y trabajamos codo a codo con nuestros clientes para apoyarle cuando nos necesitan. Nos gusta el trabajo claro con nuestros clientes y estamos siempre abiertos a atender sus dudas.
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
			<div class="col-sm-12 col-xl-6">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/contador-publico-en-mazatlan-sinaloa.jpg" alt="Benjamín Aguirre, Contador Público en Mazatlán Sinaloa">
			</div>
			<div class="col-sm-12 col-xl-6">
				<h2>
					¿Quienes Somos?
				</h2>
				<p>
					Un <strong>despacho contable en Mazatlán</strong>, con más de 5 años de experiencia atendiendo las necesidades contables de empresas en Mazatlán y Culiacán Sinaloa, Guadalajara Jalisco, Nayarit y Zacatecas.
				</p>
				<p>
					Nuestro <strong>despacho contable</strong> nació en Mazatlán Sinaloa en 2016, desde entonces hemos enfocado nuestra energía en abarcar las problemáticas de la industria y las empresas. 
				</p>
				<p>
					Pueden haber muchos <strong>despachos contables en Mazatlán Sinaloa</strong>, pero la confianza que tendrás con <strong>AGPE Contabilidad</strong> no se consigue en todos lados. 
				</p>
				<p>
					<strong>AGPE Contabilidad</strong> cuenta con experiencia, conocimiento y contactos clave para que nuestros clientes logren la tranquilidad y se enfoquen  al 100% en sus negocios.
				</p>
				<p>
					El núcleo de nuestro trabajo se enfoca en ganar la confianza que las empresas necesitan para tener la seguridad y satisfacción de que sus intereses están en manos profesionales y lograr convertirnos en socios a largo plazo.
				</p>
			</div>
		</div>
	</div>
</section>

<section id="que-hacemos-en-agpe">
	<div id="parte-1">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Servicios de nuestro contador público</h2>
					<p class="texto-info">
						Nuestra firma contable está comprometida con la tranquilidad operacional de nuestros clientes, lo cual hemos venido logrando a través de la calidad de nuestros servicios y su preferencia. Cada vez somos mejores profesionistas, puedes consultar aquí nuestros servicios de contabilidad.
					</p>

					<div class="servicios">
						<div class="servicio">
							<i class="fa fa-usd" aria-hidden="true"></i>
							<h3>
								Asesoría Contable
							</h3>
							<p>
								Es la asesoría que toda actividad que se haga llamar empresa o negocio debe considerar para trabajar en regla con el SAT y poder crecer. Resolvemos tus dudas si vas a iniciar o ya tienes un negocio.
							</p>

							<a href="<?= get_permalink(ID_SERVICIO_CONTABILIDAD) ?>">Conocer mas</a>
						</div>
						<div class="servicio border-card">
							<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							<h3>
								Asesoría Administrativa
							</h3>
							<p>
								Es el tipo de asesoría que los negocios aprovechan para hacer que sus empresas trabajen de la manera más organizada posible y aprovechando al máximo los recursos y el desempeño de su personal.
							</p>
							<a href="<?= get_permalink(ID_SERVICIO_CONSULTORIA_ADMINISTRATIVA) ?>">Conocer mas</a>
						</div>
						<div class="servicio">
							<i class="fa fa-calculator" aria-hidden="true"></i>
							<h3>
								Asesoría Fiscal
							</h3>
							<p>
								Gestionamos tus obligaciones tributarias e impuestos ante el SAT. Aplica tanto a persona física como a persona moral y para poder aplicarse se debe tener un control de ingresos y egresos de la cuenta de tu empresa.
							</p>
							<a href="<?= get_permalink(ID_SERVICIO_CONSULTORIA_FISCAL) ?>">Conocer mas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="parte-2">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="servicios">
						<div class="servicio">
							<i class="fa fa-university" aria-hidden="true"></i>
							<h3>
								Regulación Fiscal
							</h3>
							<p>
								En pocas palabras, son todos los medios que las autoridades como el SAT, IMSS, INFONAVIT, etc. ofrecen a sus contribuyentes para ponerse al corriente con deudas de impuestos o cuotas.
							</p>
							<p>
								Estos procesos se puede llevar a cabo de forma voluntaria o de manera obligatoria.
							</p>
							<a href="<?= get_permalink(ID_SERVICIO_REGULACION_FISCAL) ?>">Conocer mas</a>
						</div>
						<div class="servicio border-card">
							<i class="fa fa-gavel" aria-hidden="true"></i>
							<h3>
								Sistemas de Contabilidad CONTPAQi
							</h3>
							<p>
								Sin duda para nosotros las empresas, CONTPAQi es la herramienta que mejor se ajusta a nuestras labores de contabilidad.
							</p>
							<p>
								Con CONTPAQi puedes llevar el control integral de tu administración, compras, facturas, inventarios, cuentas por cobrar y pagar en tu empresa.
							</p>
							<a href="<?= get_permalink(ID_SERVICIO_SOPORTE_CONTPAQ) ?>">Conocer mas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part('templates_parts_site/contacto');
get_footer();
