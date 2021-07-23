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

get_template_part('templates_parts_site/contacto');
?><footer>
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
							<li><a href="#">Contacto@agpecontabilidad.com</a> </li>
							<li><a href="#">(669) 105 14 41</a></li>
							<li><a href="#">Local #22 Plaza Las Torres, Av. Las Torres y <br> Paseo de los Olivos, C.P 82124 Mazatlán, Sin.</a></li>
							<li>
								<div class="redes-sociales">
									<a href="#" target="_new"><img src="<?= get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
									<?php
									if (1 == 0) {
									?>
										<a href="#" target="_new"><img src="<?= get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
									<?php
									}
									?>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php
wp_footer();
?>

</body>

</html>
<script type="text/javascript">
	function myFunction(x) {
		x.classList.toggle("change");
	}

	jQuery(function($) {
		var scroll_pos = 0;

		jQuery(document).scroll(function() {
			scroll_pos = $(this).scrollTop();
			if (scroll_pos > 300) {
				jQuery("header").addClass('estilos_header_on_scroll');
			} else {
				jQuery("header").removeClass('estilos_header_on_scroll');
			}
		});
	});



	var $ = jQuery;
	jQuery(document).ready(function() {
		jQuery('.menu-item-has-children').after().click(function() {
			jQuery(this).toggleClass('ver');
		});



	})

	$(window).resize(function() {
		jQuery('.menu-item-has-children').removeClass('ver');
	})
</script>
