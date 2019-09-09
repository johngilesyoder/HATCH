(function ($, root, undefined) {

  $(function () {

    'use strict';

    // DOM ready, take it away
    $(document).on('change','.collaboration-input', function() {
      if( $('.collaboration-input').is(':checked') ) {
        $(this).closest('.collaboration-form').find('.collaboration-text').addClass('is--active');
      } else {
        $(this).closest('.collaboration-form').find('.collaboration-text').removeClass('is--active');
      }

    });


    var gravityForm = $('#gform_wrapper_9');

    $(document).on('input','textarea[data-input-id]', function() {
      $('#input_40_' + $(this).data('input-id')).text($(this).val());
    });

    $( "#input-first-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_40_1_3" ).attr('value', value );
    })
    .keyup();
    $( "#input-last-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_40_1_6" ).attr('value', value );
    })
    .keyup();
    $( "#input-email" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_40_2" ).attr('value', value );
    })
    .keyup();

  });

})(jQuery, this);
