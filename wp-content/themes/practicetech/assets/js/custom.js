import './lazy';

jQuery(function ($) {

	//Load products
	$(document.body).on('click', '.pagination-links li:not(.current-page)', function () {
    let defaultDisplay, currentPage;
    defaultDisplay = parseInt($(this).closest('.pagination').attr('data-display'));
    if($(this).hasClass('first-page')){
      currentPage = 1;
    } else if ($(this).hasClass('prev-page')){
      currentPage = parseInt($('.current-page').text()) - 1;
    } else if ($(this).hasClass('next-page')){
      currentPage = parseInt($('.current-page').text()) + 1;
    } else if ($(this).hasClass('last-page')){
      currentPage = parseInt($('.last-page').attr('data-count'));
    } else {
      currentPage = $(this).text();
    }
    $('.products-wrap').empty();
		$.ajax({
      url: "/wp-admin/admin-ajax.php",
      type: "POST",
      data: {
        action: "load_products",
        defaultDisplay, currentPage
      },
      success: function (result) {
        $('.products-wrap').append(result);
      },
    });
	});

  //Swiper home hero
  const swiper = new Swiper('.swiper-home', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  //Swiper home about
  const swiper2 = new Swiper('.swiper-about', {
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
