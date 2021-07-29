<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<section id="contacto">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-xl-7">
				<div id="form-contacto">
					<h3>
						¡Contáctanos para más información!
					</h3>
					<p>
						Buscamos convertirnos en tus mejores aliados de negocio y poder <span class="font-weight-bold">llevar tu contabilidad y de tu empresa</span>.
					</p>
					<form method="post" id="frmContacto">
						<div class="container">
							<div class="row">
								<div class="col-sm-12  col-lg-6">
									<div class="input">
										<label for=""><span>*</span>Nombre:</label>
										<input type="text" value="<?= WP_DEBUG ? 'Héctor Cruz' : ''; ?>" id="txtNombre" name="txtNombre">
									</div>
								</div>
								<div class="col-sm-12  col-lg-6">
									<div class="input">
										<label for=""><span>*</span>Email:</label>
										<input type="email" value="<?= WP_DEBUG ? 'hectorcrzprz@gmail.com' : ''; ?>" id="txtEmail" name="txtEmail">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<div class="input">
										<label for=""><span>*</span>Teléfono:</label>
										<input type="text" value="<?= WP_DEBUG ? '6691345434' : ''; ?>" id="txtTelefono" name="txtTelefono">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<div class="input select">
										<label for=""><span>*</span>Régimen Fiscal:</label>
										<select name="selRegimen" id="selRegimen">
											<option value="<?= WP_DEBUG ? 'Persona de prueba' : ''; ?>">Seleccione 1</option>
											<option value="Persona Física">Persona Física</option>
											<option value="Persona Moral">Persona Moral</option>
											<option value="No lo tengo claro">No lo tengo claro</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<div class="input select">
										<label for=""><span>*</span>Servicio de interés:</label>
										<select name="selServicio" id="selServicio">
											<option value="<?= WP_DEBUG ? 'Servicio de pruebas' : ''; ?>">Seleccione 1</option>
											<?php
											$menu_name = 'top-menu';
											$array_menu = wp_get_nav_menu_items($menu_name);
											$uri_menu = "/servicios";

											foreach ($array_menu as $key => $value) {
												/**aqui busco el menu que me interesa, el de servicios */
												if ($value->url == $uri_menu) {
													foreach ($array_menu as $item_menu) {
														if ($item_menu->menu_item_parent == $value->ID) {
											?>
															<option value="<?= $item_menu->attr_title; ?>"><?= $item_menu->attr_title; ?></option>
											<?php
														}
													}
												}
											}
											?>
											<option value="No lo tengo claro">No lo tengo claro</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<div class="input-check">
										<input type="checkbox" id="chkTerminos" name="chkTerminos" value="1" <?= WP_DEBUG ? 'checked' : ''; ?>> <label> He leído el <a href="#">Aviso de privacidad</a> y deseo recibir información.</label><br>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="input">
										<label for=""><span>*</span>Mensaje:</label>
										<textarea name="txtMensaje" id="txtMensaje" cols="30" rows="3" placeholder="Ingrese su mensaje"><?= WP_DEBUG ? 'Mensaje de prueba' . time() : ''; ?></textarea>
									</div>
								</div>
								<?php
								if (!WP_DEBUG) {
								?>
									<div class="col-sm-12">
										<div class="input">
											<div class="g-recaptcha" data-sitekey="6LcEo8UbAAAAAK_QGygMkLZnXpAd5IvIwwG5aYlT"></div>
										</div>
									</div>
								<?php
								}
								?>
								<div class="col-sm-12">
									<button type="submit" id="btn-submit">
										Envíar Mensaje
									</button>
									<img id="loader" src="<?= get_template_directory_uri() ?>/assets/images/spinner.gif" alt="">
								</div>

								<div class="col-12">
									<div id="resultado">

									</div>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xl-5">
				<div id="datos-mapa">
					<h3>
						¡Encuentra nuestra dirección!
					</h3>
					<div class="datos">
						<div class="dato">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Paseo de la Reforma 296, Juárez, 06600 Ciudad de México, CDMX</p>
						</div>
						<div class="dato">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<p>(6691) 05 14 51</p>
						</div>
						<div class="dato">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<p>Lun - Vie. 09:00 am a 06:30 pm. Sábados 09:00 am a 01:00 pm.</p>
						</div>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.4742894170977!2d-106.42007028502786!3d23.2622099848323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f53dc2d831439%3A0x18ee8659a76e9d3b!2sAGPE%20CONTABILIDAD%20Y%20ADMINISTRACION!5e0!3m2!1ses-419!2smx!4v1626935907243!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
