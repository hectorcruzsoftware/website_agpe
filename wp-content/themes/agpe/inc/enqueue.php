<?php

/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('understrap_scripts')) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts()
	{
		// Get the theme data.
		$the_theme     =  wp_get_theme();
		$theme_version = (!WP_DEBUG) ? $the_theme->get('Version') : time();

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style('understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version);

		wp_enqueue_script('jquery');
		//print_r($GLOBALS['wp_scripts']->registered);
		/*
		jquery-effects-core
		jquery-effects-blind
		jquery-effects-bounce
		jquery-effects-clip
		jquery-effects-drop
		jquery-effects-explode
		jquery-effects-fade
		jquery-effects-fold
		jquery-effects-highlight
		jquery-effects-pulsate
		jquery-effects-scale
		jquery-effects-shake
		jquery-effects-slide
		jquery-effects-transfer
		*/
		wp_enqueue_script('jquery-effects-bounce');

		wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js');

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script('understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true);
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}

		wp_enqueue_script('js-footer-agpe', get_template_directory_uri() . '/js/footer_home.js', array('jquery'), time(), true);
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action('wp_enqueue_scripts', 'understrap_scripts');
