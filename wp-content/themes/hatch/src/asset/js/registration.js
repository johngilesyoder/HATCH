(function ($, root, undefined) {

	$(function () {

		'use strict';
		// DOM ready, take it away

    $( ".btn-registration" ).on( "click", function() {
      $('#registration-content').hide();
      $('#form-wrapper').show();
      $(this).addClass('is--toggled');
			$('html,body').animate({
        scrollTop: $("#form-wrapper").offset().top},
      'slow');
    });

  });

})(jQuery, this);
