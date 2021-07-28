<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
function form_enqueue_script()
{
	wp_register_script(
		'form-js',
		get_theme_file_uri('src/js/form-contacto.js'),
		array('jquery'),
		time(),
		false
	);

	wp_localize_script('form-js', 'ajax_object', array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('form_nonce'),
		'hook' => 'form-action'
	));

	wp_enqueue_script('form-js');
}

add_action('wp_enqueue_scripts', 'form_enqueue_script');


function enviar_form()
{
	check_ajax_referer('form_nonce', 'security');

	/**parsenado el formulario serializado en un arreglo php */
	$array_form = array();
	parse_str($_POST['data'], $array_form);

	/**validacion del catpcha */

	if ($array_form['g-recaptcha-response'] == '') {
		$result = '<div class="alert alert-danger" role="alert">
		¡Error al enviar el mensaje, por favor reintente!
		</div>';
		wp_send_json_error($result);
		wp_die();
	} else {
		$obj = new stdClass();
		$obj->secret = RECAPTCHA_SECRET;
		$obj->response = $array_form['g-recaptcha-response'];
		$obj->remoteip = $_SERVER['REMOTE_ADDR'];
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$options = array(
			'http' => array(
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($obj)
			)
		);
		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);

		$validar = json_decode($result);
		if (!$validar->success) {
			wp_send_json_error('Captcha invalidoggggg');


			$result = '<div class="alert alert-danger" role="alert">
					¡Error al enviar el mensaje, por favor reintente!
					</div>';
			wp_send_json_error($result);
			wp_die();
		}
	}




	$errores = new WP_Error();

	/**validando formulario */
	if (empty(sanitize_text_field($array_form['txtNombre']))) {
		$errores->add('txtNombre', 'Ingrese su nombre.');
	}

	if (empty($array_form['txtEmail'])) {
		$errores->add('txtEmail', 'Ingrese su email.');
	} else {
		if (!is_email($array_form['txtEmail'])) {
			$errores->add('email_no_valido', 'el email no es válido.');
		}
	}

	if (empty($array_form['txtTelefono'])) {
		$errores->add('txtTelefono', 'Ingrese su telefono.');
	}

	if (empty($array_form['selRegimen'])) {
		$errores->add('selRegimen', 'Ingrese su régimen fiscal.');
	}
	if (empty($array_form['selServicio'])) {
		$errores->add('selServicio', 'Ingrese el servicio que le interesa.');
	}

	if (empty($array_form['chkTerminos'])) {
		$errores->add('chkTerminos', 'Debe aceptar los términos de privacidad.');
	}

	if (empty($array_form['txtMensaje'])) {
		$errores->add('txtMensaje', 'Ingrese su mensaje.');
	}
	//sleep(1);
	if (($array_form['chkTerminos'] == true)) {
		/**checa si tiene erreores */
		if ($errores->has_errors()) {
?>
				<?php
				$result = [];
				foreach ($errores->get_error_codes() as $key => $error) {
					array_push($result, ['error' => $error, 'message' => $errores->get_error_message($error)]);
				}
				?>
		<?php
			wp_send_json_error($result);
		} else {
			$destinatario = $array_form['txtEmail'];
			$asunto = time() . 'AGPE CONTABILIDAD | INFORMACIÓN';
			$cabeceras = array('Content-Type: text/html; charset=UTF-8');


			/*ob_start();
			include(get_template_directory() . '/templates_parts_site/email_registro.php');
			$email_content = ob_get_contents();
			$find = "%name%";
			$replace = '12222';
			str_replace($find, $replace, $email_content);
			ob_get_clean();
			*/

			$email_content =
				'<div style="
				width: 100%;
				background-color: #F5F6F8;
				color: #022258;
				padding:70px;
				font-size: 16px;
				font-family: Arial, Helvetica, sans-serif;
			">
			<div style="width: 600px !important;
					background-color: #fff;
					display: block;
					margin: 0 auto !important;
					padding:40px 20px;
					border-radius:8px;
					">
				<p>
					Qué tal <strong>' . $array_form['txtNombre'] . '</strong>,' . '
				</p>
				<p>
					Hemos recibido tu solicitud de más información sobre nuestros servicios, según los datos que nos ha proporcionado:
				</p>
				<table style="width: 100%;border-collapse: collapse;">
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Fecha de solicitud:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . date('Y-m-d') . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Nombre:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . $array_form['txtNombre'] . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Correo electrónico:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . $array_form['txtEmail'] . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Teléfono:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . $array_form['txtTelefono'] . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Régimen Fiscal:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . $array_form['selRegimen'] . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Servicio de interés:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">' . $array_form['selServicio'] . '</td>
					</tr>
					<tr>
						<td style="
							width:30%;
							text-align: left;
							background-color: #022258;
							color: white;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">Mensaje:</td>
						<td style="
							text-align: left;
							border: 1px solid #ddd;
							  padding: 12px 8px;
							  ">
							' . $array_form['txtMensaje'] . '
						</td>
					</tr>
				</table>

				<span style="display:block;height:1px;background-color:#F5F6F8;margin:21px 0;"></span>
				<div style="display:flex; padding:21px 0;">'
				/*<img src="' . get_template_directory_uri() . '/assets/images/benjamin.jpg;">*/
				. '<span style="margin-left:0px;">Soy el L.C.P. Benjamin Aguirre</span>
				</div>
				<div>
					Seré la persona, que estará resolviendo tus dudas muy pronto.
				</div>
				<div style="margin-top:21px">
					Puedes estar seguro de que tu información no se almacena ni será compartida con ningún externo a nuestro despacho.
				</div>
			</div>
		</div>';


			if (wp_mail($destinatario, $asunto, $email_content, $cabeceras)) {
				$result = '<div class="alert alert-success" role="alert">
			¡Se ha enviado el mensaje. Nos pondremos en contacto muy pronto!
			</div>';
				wp_send_json_success($result);
			} else {
				$result = '<div class="alert alert-danger" role="alert">
					¡Error al enviar el mensaje, por favor reintente!
					</div>';
				wp_send_json_error($result);
			}
		}
	} else {
		$result = [['error' => 'chkTerminos', 'message' => $errores->get_error_message('chkTerminos')]];
		wp_send_json_error($result);
	}

	wp_die();
}
add_action('wp_ajax_nopriv_form-action', 'enviar_form');
add_action('wp_ajax_form-action', 'enviar_form');
