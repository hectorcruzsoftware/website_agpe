<?php
defined('ABSPATH') || exit;

if (!WP_DEBUG) {


	add_action('login_enqueue_scripts', 'login_recaptcha_script');

	function login_recaptcha_script()
	{
		wp_register_script('recaptcha_login', 'https://www.google.com/recaptcha/api.js');
		wp_enqueue_script('recaptcha_login');



		wp_enqueue_style('login_enqueue_scripts', get_template_directory_uri() . '/css/wordpress.css', array(), time());
	}






	add_action('login_form', 'display_recaptcha');
	add_action('lostpassword_form', 'display_recaptcha');
	add_action('resetpass_form', 'display_recaptcha');

	function display_recaptcha()
	{
		echo " <div class='g-recaptcha-inner'><div class='g-recaptcha' data-sitekey='" . RECAPTCHA_PUBLIC . "'></div></div>";
	}


	add_filter('wp_authenticate_user', 'verify_recaptcha_on_login', 10, 2);
	add_filter('allow_password_reset', 'verify_recaptcha_on_login', 10, 2);

	function verify_recaptcha_on_login($user = '', $password = '')
	{
		if (isset($_POST['g-recaptcha-response'])) {
			$response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret=' . RECAPTCHA_SECRET . '&response=' . $_POST['g-recaptcha-response']);
			$response = json_decode($response['body'], true);

			if (true == $response['success']) {
				return $user;
			} else {
				// FIXME: This one fires if your password is incorrect... Check if password was incorrect before returning this error...
				return new WP_Error('Captcha Invalid', __('<strong>ERROR</strong>: Verifica que no eres un robot.'));
			}
		} else {
			return new WP_Error('Captcha Invalid', __('<strong>ERROR</strong>: You are a bot. If not then enable JavaScript.'));
		}
	}


	add_action('validate_password_reset', 'validar_recatpcha_before_password_reset');


	function validar_recatpcha_before_password_reset($errors)
	{
		if (isset($_POST['g-recaptcha-response'])) {
			$response = wp_remote_get('https://www.google.com/recaptcha/api/siteverify?secret=' . RECAPTCHA_SECRET . '&response=' . $_POST['g-recaptcha-response']);
			$response = json_decode($response['body'], true);

			if (true == $response['success']) {
				return;
			} else {
				$errors->add('Captcha Invalid', __('<strong>ERROR</strong>: Verifique que no es un robot.'));
			}
		}
	}
}
