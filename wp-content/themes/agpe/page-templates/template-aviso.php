<?php

/**
 * Template Name: Template - Aviso de Privacidad
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<section class="aviso-privacidad">
	<div class="banner-page">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Aviso de Privacidad</h1>
				</div>
			</div>
		</div>
	</div>

	<?php
	get_template_part('templates_parts_site/aviso_privacidad');
	?>

</section>
<?php
get_footer();
