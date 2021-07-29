let $ = jQuery;
function myFunction(x) {
	/**toggle del menu responsive x */
	x.classList.toggle("change");
}

$(document).ready(function (e) {
	/**append un elemento para hacer el toogle del sub menú */
	$(".menu-item-has-children").append(
		'<i class="fa fa-chevron-right" aria-hidden="true"></i>'
	);

	/**ver sub menu en click en menu responsive */
	$(".menu-item-has-children i").click(function () {
		$(this).parent().toggleClass("ver");
	});

	/**cambio de menu fijo en scroll */

	var scroll_pos = 0;
	$(document).scroll(function () {
		scroll_pos = $(this).scrollTop();
		if (scroll_pos > 300) {
			$("header").addClass("estilos_header_on_scroll");
		} else {
			$("header").removeClass("estilos_header_on_scroll");
		}
	});

	/**cierra submenu al hacer resize la pantalla */
	$(window).resize(function () {
		$(".menu-item-has-children").removeClass("ver");
	});
});
