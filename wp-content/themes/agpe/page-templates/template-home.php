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
	<div class="container">
		<div class="row">
			<div class="col">
				<div id="banner-contenido">
					<h1>Despacho Contable en <br>
						<span>Mazatlán Sinaloa</span>
					</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit
						mauris donec sit morbi eget aliquam molestie. Molestie
						libero nam in tempus, faucibus.
					</p>
					<a href="#">Ponenerme en contacto</a>
					<div class="datos-div">
						<div class="data">
							<div class="contador-actualizado">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam adipisci assumenda eveniet ut consectetur, fugiat deserunt labore quibusdam vitae. Debitis corporis alias temporibus quaerat, unde consectetur fugiat sequi facilis.
								</p>
							</div>
							<div class="contador-comprometido">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam adipisci assumenda eveniet ut consectetur, fugiat deserunt labore quibusdam vitae. Debitis corporis alias temporibus quaerat, unde consectetur fugiat sequi facilis.
								</p>
							</div>
							<div class="contador-confianza">
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam adipisci assumenda eveniet ut consectetur, fugiat deserunt labore quibusdam vitae. Debitis corporis alias temporibus quaerat, unde consectetur fugiat sequi facilis.
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">


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
