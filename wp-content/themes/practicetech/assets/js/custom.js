import './lazy';

jQuery(function ($) {

  // HOME

  //Swiper home hero
  const swiper = new Swiper('.swiper-home', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 3000,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  // ARCHIVE

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

  // ABOUT

  //FAQ about
  let elementOld = null;
  let elements = $('.question-wrap');
  let openClass = 'open';
  let answer, answerOld, elementNew;
  elements.map((index, element) => {
    $(element).on('click', function () {
      elementNew = element.closest('.faq-inner');
      answer = $(this).closest('.faq-inner').find('.answer');
      if (elementOld != null) {
        $(elementOld).removeClass(openClass);
        answerOld = $(elementOld).find('.answer');
        answerOld.css('max-height', '0px');
      }
      if (elementOld !== elementNew) {
        $(this).closest('.faq-inner').addClass(openClass);
        answer.css(
          'max-height',
          answer.find('.wrapper').outerHeight() + 'px'
        );
        elementOld = elementNew;
      } else {
        elementOld = null;
      }
    });
  });

  //Swiper about
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
