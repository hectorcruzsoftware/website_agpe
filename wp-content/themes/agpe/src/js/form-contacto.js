jQuery(document).ready(function ($) {
	$("#frmContacto").submit(function (e) {
		e.preventDefault();
		$(".item-error").remove();
		$("#btn-submit").attr("disabled", true);
		jQuery.ajax({
			type: "post",
			url: ajax_object.url,
			data: {
				data: $(this).serialize(),
				action: ajax_object.hook,
				security: ajax_object.nonce,
			},
			success: function (result) {
				if (!result.success) {
					/**display errors */
					if (Array.isArray(result.data)) {
						result.data.forEach((error) => {
							$("#" + error.error)
								.parent()
								.append(
									"<span class='item-error'>" + error.message + "</span>"
								);
						});
						$(".item-error").effect("bounce", "slow");
					} else {
						$("#resultado")
							.append(result.data)
							.find(".alert")
							.delay(5000)
							.fadeOut("slow");
					}
				} else {
					$("#frmContacto")[0].reset();
					$("#resultado")
						.append(result.data)
						.find(".alert")
						.delay(5000)
						.fadeOut("slow");
				}
			},
			error: function (error) {
				//console.log(error);
			},
			beforeSend: function () {
				$("#loader").show();
			},
			complete: function () {
				$("#loader").hide();
				grecaptcha.reset();
				$("#btn-submit").removeAttr("disabled");
			},
		});
	});
});
