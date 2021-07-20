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
							<p>
								Aplicamos un modelo de negocio contable vigente, mediante operaciones innovadoras que nos ayudan a mantener actualizada tu empresa para ir un paso adelante de las eventualidades financieras.
							</p>
						</div>
						<div class="contador-comprometido">
							<p>
								Tenemos más de 10 años de experiencia en materia fiscal y contable por ello nos hemos convertido en los aliados en contabilidad de múltiples empresas, gracias al compromiso que ponemos en cada proyecto.
							</p>
						</div>
						<div class="contador-confianza">
							<p>
								A través de cada uno de nuestros servicios, brindamos una atención puntual y personalizada para garantizar resultados que se reflejan en el crecimiento y la rentabilidad de tu empresa.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<div class="container bg-warning">
	<?php
	for ($i = 0; $i < 100; $i++) {
		# code...
	?>

		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. At cum consectetur minima magni temporibus dignissimos est veniam eius harum neque facere, explicabo fuga odit laborum doloremque earum vel! Adipisci, voluptatem?
		</p>
	<?php
	}
	?>
</div>
<?php
get_footer();
