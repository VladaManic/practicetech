import '../sass/style.scss';
import '../vendors/js/index';
import './custom';

var tld = window.location.host.substr(window.location.host.length - 4);
if (module.hot && (tld == '.tim' || tld == '3000')) {
	const hotEmitter = require("webpack/hot/emitter");
	const DEAD_CSS_TIMEOUT = 2000;

	hotEmitter.on("webpackHotUpdate", function (currentHash) {
		document.querySelectorAll("link[href][rel=stylesheet]").forEach((link) => {
			const nextStyleHref = link.href.replace(/(\?\d+)?$/, `?${Date.now()}`);
			const newLink = link.cloneNode();
			newLink.href = nextStyleHref;

			link.parentNode.appendChild(newLink);
			setTimeout(() => {
				link.parentNode.removeChild(link);
			}, DEAD_CSS_TIMEOUT);
		});
	})
}

if (module.hot) {
	module.hot.accept('./custom.js', () => {
		const Custom = require('./custom.js').default;
	})
}