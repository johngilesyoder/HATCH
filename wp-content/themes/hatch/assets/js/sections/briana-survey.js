(function ($, root, undefined) {

  $(function () {

    'use strict';

    // DOM ready, take it away
    var gravityForm = $('#gform_wrapper_28');

    $('input[type="range"]').rangeslider({
      //polyfill: false
    });

    $(document).on('input','input[data-input-id]', function() {
      $('#input_31_' + $(this).data('input-id')).val($(this).val());
      $(this).siblings('output').val($(this).val());
      if ($(this).val() === '0') {
        $(this).siblings('output').html('None');
      }
    });

    $( "#input-first-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_31_195_3" ).attr('value', value );
    })
    .keyup();
    $( "#input-last-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_31_195_6" ).attr('value', value );
    })
    .keyup();
    $( "#input-email" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_31_196" ).attr('value', value );
    })
    .keyup();

  });

})(jQuery, this);
