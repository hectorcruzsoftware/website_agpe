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
						<a href="<?= $item_menu->url; ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $imagen; ?>.jpg" alt=""></a>
						<div>
							<h3><a href="<?= $item_menu->url; ?>"><?= $item_menu->attr_title; ?></a></h3>
							<?php
							if ($current_uri == $uri_menu) {
							?>
								<p>
									<?php
									switch (!home_url() . $item_menu->url . '/') {
										case (get_permalink(ID_SERVICIO_CONTABILIDAD)):
											echo 'Mensjae';
											break;
										case (get_permalink(ID_SERVICIO_CONSULTORIA_ADMINISTRATIVA)):
											echo 'Mensjae';
											break;
										case (get_permalink(ID_SERVICIO_CONSULTORIA_FISCAL)):
											echo 'Mensjae';
											break;
										case (get_permalink(ID_SERVICIO_REGULACION_FISCAL)):
											echo 'Mensjae';
											break;
										case (get_permalink(ID_SERVICIO_SOPORTE_CONTPAQ)):
											echo 'Mensjae';
											break;
										default:
											echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi minus repudiandae architecto, sunt recusandae officiis explicabo reiciendis voluptas est. Magni necessitatibus, eum qui optio molestiae tenetur tempore amet doloribus dolores.';
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
