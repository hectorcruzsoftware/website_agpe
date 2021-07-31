<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<footer id="footer-page">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="site-footer">
					<div class="dato"><a href="/"><img id="logo-footer" src="<?= get_template_directory_uri(); ?>/assets/images/agpe.svg" alt=""></a></div>
					<div class="dato">
						<h5>Menú</h5>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'fallback_cb'     => '',
								'container_id' => 'footer-menu',
								'container_class' => 'footer-menu-container',
								'menu_id' => 'site-footer-menu',
								'depth'           => 1
							)
						);
						?>
					</div>
					<div class="dato">
						<h5>Sitios de interés</h5>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'sitios-interes',
								'fallback_cb'     => '',
								'container_id' => 'footer-menu',
								'container_class' => 'footer-menu-container',
								'menu_id' => 'site-footer-menu',
								'depth'           => 1
							)
						);
						?>
					</div>




					<div class="dato">
						<h5>Contacto</h5>
						<ul class="menu datos-contacto">
							<li><a href="mailto:<?= EMAIL; ?>" target="_new">Email: <?= EMAIL; ?></a> </li>
							<li><a href="tel:+ <?= TELEFONO; ?>" target="_new">Teléfono: <?= TELEFONO_FORMATO; ?></a></li>
							<li><a href="<?= GOOGLE_MAPS; ?>" target="_new"> <?= DIRECCION; ?></a></li>
							<li>
								<div class="redes-sociales">
									<a href="<?= FACEBOOK; ?>" target="_new"><img src="<?= get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="copyright-developer">
		<span>
			© Copyright 2021 | Despacho Contable México | Todos los derechos reservados | Contadores Públicos en CDMX
		</span>
		<span>
			<a href="/aviso-de-privacidad">Aviso de privacidad</a> | <a href="/mapa-del-sitio">Mapa del sitio</a>
		</span>
	</div>
</footer>
<a href="<?= WHATSAPP_MENSAJE_LINK ?>" id="whats" target="_new"><img src="<?= get_template_directory_uri(); ?>/assets/images/WhatsApp.svg" alt=""></a>
<?php
wp_footer();
?>

</body>

</html>
