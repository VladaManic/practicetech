if ('loading' in HTMLImageElement.prototype) {
	/* Native lazy loading is supported */
	var images = document.querySelectorAll('img[loading="lazy"]');
	var sources = document.querySelectorAll('source[data-srcset]');
	sources.forEach(function (source) {
		source.srcset = source.dataset.srcset;
	});
	images.forEach(function (img) {
		img.src = img.dataset.src;
	});
} else {
	/*  Native lazy loading is not supported */
	require('../vendors/js/lazysizes.min');
}
