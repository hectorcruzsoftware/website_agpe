<?php
defined('ABSPATH') || exit;

if (!WP_DEBUG) {
	add_action('wp_head', 'add_meta_tags');
	function add_meta_tags()
	{
?>
		<!--verificacion del google search console del dominio en produccion -->
		<meta name="google-site-verification" content="lp0_JqaOKO3vPX6CfFdnPi1GCw1I0ZQveoS-LVLVLlc" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-LW0W9ZLLN7"></script>
		<script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'G-LW0W9ZLLN7');
		</script>
<?php
	}
}
