(function ($, root, undefined) {

	$(function () {

		'use strict';
		// DOM ready, take it away

    $( "#registration-toggle" ).on( "click", function() {
      $('#registration-content').hide();
      $('#form-wrapper').show();
      $(this).addClass('is--toggled');
    });

  });

})(jQuery, this);