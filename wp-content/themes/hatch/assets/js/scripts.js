(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		window.setInterval(function() {

	  var current = new Date();
	  var expiry = new Date("Sep 29, 2018 23:59:59");

	  if (current.getTime() > expiry.getTime()) {
	    $('.topbar-apply').hide();

	  } else if (current.getTime() < expiry.getTime()) {
	    $('.topbar-apply').show();
	  }

	}, 0);

	});

})(jQuery, this);
