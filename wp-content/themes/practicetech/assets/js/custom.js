import './lazy';

jQuery(function ($) {

	//Load products
	$(document.body).on('click', '#archive-title', function () {
		$('.products-wrap').empty();
		$.ajax({
      url: "/wp-admin/admin-ajax.php",
      type: "POST",
      data: {
        action: "load_products",
      },
      success: function (result) {
        $('.products-wrap').append(result);
      },
    });
	});
});
