(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		window.setInterval(function() {

	  var current = new Date();
	  var expiry = new Date("September 13, 2016 23:59:59")

	  if (current.getTime() > expiry.getTime()) {
	    $('.topbar-bigsky').hide();

	  } else if (current.getTime() < expiry.getTime()) {
	    $('.topbar-bigsky').show();
	  }

	}, 0);

	});

})(jQuery, this);
