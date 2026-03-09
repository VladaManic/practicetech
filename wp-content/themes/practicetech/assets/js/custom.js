import './lazy';

jQuery(function ($) {

	//Load products
	$(document.body).on('click', '.pagination-links li:not(.current-page)', function () {
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

  //Swiper
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});
