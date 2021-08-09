<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section id="lista-servicios">
	<?php
	/**filtrnado los datos de los servicios */
	//obteniendo el menu
	$menu_name = 'top-menu';
	$array_menu = wp_get_nav_menu_items($menu_name);

	$uri_menu = "/servicios-de-contabilidad-en-mazatlan";

	//URI actual
	$current_uri = '/' . str_replace('/', '', $_SERVER['REQUEST_URI']);


	foreach ($array_menu as $key => $value) {
		/**aqui busco el menu que me interesa, el de servicios */
		if ($value->url == $uri_menu) {
			$servicio_num = 0;
			foreach ($array_menu as $item_menu) {
				if ($item_menu->menu_item_parent == $value->ID) {
					if ($item_menu->url == $current_uri) {
						continue;
					}
					if ($servicio_num == 3 && $current_uri != $uri_menu) {
						break;
					}
					$imagen = str_replace('/', '', $item_menu->url);
					//print_r($item_menu);
	?>
					<div>
						<a href="<?= $item_menu->url; ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $imagen; ?>.jpg" alt="<?= $imagen; ?>"></a>
						<div>
							<h3><a href="<?= $item_menu->url; ?>"><?= $item_menu->attr_title; ?></a></h3>
							<?php
							if ($current_uri == $uri_menu) {
							?>
								<p>
									<?php
									switch (home_url() . $item_menu->url . '/') {
										case (get_permalink(ID_SERVICIO_CONTABILIDAD)):
									?>
								<p>
									Asesoría para toda actividad que se haga llamar empresa o negocio debe considerar para trabajar en regla con el SAT y poder crecer.
								</p>

							<?php
											break;
										case (get_permalink(ID_SERVICIO_CONSULTORIA_ADMINISTRATIVA)):
							?>
								<p>
									Es el tipo de asesoría que los negocios aprovechan para hacer que sus empresas trabajen de la manera más organizada posible y aprovechando al máximo los recursos y el desempeño de su personal.
								</p>

							<?php
											break;
										case (get_permalink(ID_SERVICIO_CONSULTORIA_FISCAL)):
							?>
								<p>
									Gestiona tus obligaciones tributarias e impuestos ante el SAT. Estas obligaciones fiscales aplican tanto a persona física como a persona moral y para poder aplicarse se debe tener un control de ingresos y egresos de la cuenta de tu empresa.
								</p>

							<?php
											break;
										case (get_permalink(ID_SERVICIO_REGULACION_FISCAL)):
							?>
								<p>
									En pocas palabras, son todos los medios que las autoridades como el SAT, IMSS, INFONAVIT, etc. ofrecen a sus contribuyentes para ponerse al corriente con deudas de impuestos o cuotas. Estos procesos se puede llevar a cabo de forma voluntaria o de manera obligatoria.
								</p>

							<?php
											break;
										case (get_permalink(ID_SERVICIO_SOPORTE_CONTPAQ)):
							?>
								<p>
									Sin duda para nosotros las empresas, CONTPAQi es la herramienta que mejor se ajusta a nuestras labores de contabilidad.
								</p>

							<?php
											break;
										default:
							?>
								<p>
									-
								</p>

						<?php

											break;
									}
						?>
						</p>
					<?php
							} else {
					?>
						<p>
							<?php
								if ($item_menu->description != '') {
									echo $item_menu->description;
								} else {
							?>
								-
							<?php
								}
							?>
						</p>
					<?php
							}
					?>
					<?php
					if ($current_uri == $uri_menu) {
					?>
						<a href="<?= $item_menu->url; ?>" class="btn-theme">Más Información</a>
					<?php
					}
					?>
						</div>
					</div>
	<?php
					/*echo '<pre>';
					print_r($item_menu);
					echo '</pre>';
*/
					$servicio_num++;
				}
			}
			break;
		}
	}
	?>
</section>
