
	function myFunction(x) {
		x.classList.toggle("change");
	}

	jQuery(function($) {
		var scroll_pos = 0;
		jQuery(document).scroll(function() {
			scroll_pos = $(this).scrollTop();
			if (scroll_pos > 100) {
				jQuery("header").addClass('estilos_header_on_scroll');
			} else {
				jQuery("header").removeClass('estilos_header_on_scroll');
			}
		});
	})(jQuery);
