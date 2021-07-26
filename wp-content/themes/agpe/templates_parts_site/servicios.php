<section id="lista-servicios">

	<?php

	/**filtrnado los datos de los servicios */


	//obteniendo el menu
	$menu_name = 'top-menu';
	$array_menu = wp_get_nav_menu_items($menu_name);

	$uri_menu = "/servicios";

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
					switch ($item_menu->url) {
						case '/servicio-de-contabilidad-en-mazatlan-sinaloa':
							$imagen = 'servicio1';
							break;
						case '/consultoria-administrativa':
							$imagen = 'servicio2';
							break;
						case '/consultoria-fiscal':
							$imagen = 'servicio3';
							break;
						case '/regulacion-de-obligaciones-fiscales':
							$imagen = 'servicio4';
							break;
						case '/soporte-en-sistemas-contpaq':
							$imagen = 'servicio5';
							break;
						default:
							$imagen = 'servicio6';
							break;
					}
	?>
					<div>
						<a href="<?= $item_menu->url; ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $imagen; ?>.jpg" alt=""></a>
						<div>
							<h3><a href="<?= $item_menu->url; ?>"><?= $item_menu->attr_title; ?></a></h3>
							<?php
							if ($current_uri == $uri_menu) {
							?>
								<p>Somos contadores públicos determinados. Por ello, buscamos que Despacho Contable México sea reconocido a nivel nacional, no sólo por ser prestadores de servicios en materia contable, sino por ser los mejores aliados para tu negocio o empresa, porque nos satisface crecer de la mano de nuestros clientes.</p>
							<?php
							} else {
							?>
								<p>
									<?php
									if ($item_menu->description != '') {
										echo $item_menu->description;
									} else {
									?>
										Ingeniero electrónico, de sistemas y magister en ingeniería Ingeniero electrónico, de sistemas y magister en ingeniería
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
