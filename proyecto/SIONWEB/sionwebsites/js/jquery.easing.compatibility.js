/ *
 * jQuery Easing Compatibility v1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Agrega compatibilidad para las aplicaciones que usan los nombres de suavizado pre 1.2.
 *
 * Derechos de autor (c) 2007 George Smith
 * Licenciado bajo la licencia MIT:
 * http://www.opensource.org/licenses/mit-license.php
 * /

jQuery.extend (jQuery.easing,
{
	easeIn: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInQuad (x, t, b, c, d);
	}
	easeOut: función (x, t, b, c, d) {
		devolver jQuery.easing.easeOutQuad (x, t, b, c, d);
	}
	easeInOut: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInOutQuad (x, t, b, c, d);
	}
	expoin: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInExpo (x, t, b, c, d);
	}
	expoout: función (x, t, b, c, d) {
		devolver jQuery.easing.easeOutExpo (x, t, b, c, d);
	}
	expoinout: función (x, t, b, c, d) {
		devuelve jQuery.easing.easeInOutExpo (x, t, b, c, d);
	}
	bouncein: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInBounce (x, t, b, c, d);
	}
	rebote: función (x, t, b, c, d) {
		devolver jQuery.easing.easeOutBounce (x, t, b, c, d);
	}
	bounceinout: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInOutBounce (x, t, b, c, d);
	}
	elasin: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInElastic (x, t, b, c, d);
	}
	elasout: función (x, t, b, c, d) {
		devolver jQuery.easing.easeOutElastic (x, t, b, c, d);
	}
	elasinout: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInOutElastic (x, t, b, c, d);
	}
	backin: función (x, t, b, c, d) {
		devuelve jQuery.easing.easeInBack (x, t, b, c, d);
	}
	retroceso: función (x, t, b, c, d) {
		devolver jQuery.easing.easeOutBack (x, t, b, c, d);
	}
	backinout: función (x, t, b, c, d) {
		devolver jQuery.easing.easeInOutBack (x, t, b, c, d);
	}
});