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


    var gravityForm = $('#gform_wrapper_55');

    $(document).on('input','textarea[data-input-id]', function() {
      $('#input_55_' + $(this).data('input-id')).text($(this).val());
    });

    $( "#input-first-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_55_1_3" ).attr('value', value );
    })
    .keyup();
    $( "#input-last-name" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_55_1_6" ).attr('value', value );
    })
    .keyup();
    $( "#input-email" ).keyup(function() {
      var value = $( this ).val();
      $( "#input_55_2" ).attr('value', value );
    })
    .keyup();

    $(document).on('click', 'button[data-type="btn-upvote"]', function() {
      var $this = $(this);
      var projectName = $this.data('project-title');
      var $upvote1 = $('#input_55_4');
      var $upvote2 = $('#input_55_5');
      var $upvote3 = $('#input_55_6');
      if ($this.hasClass('is-selected')) {
        $this.removeClass('is-selected');
        if ( $upvote1.val() === projectName ) {
          $upvote1.attr('value', '' );
        } else if ( $upvote2.val() === projectName ) {
          $upvote2.attr('value', '' );
        } else if ( $upvote3.val() === projectName ) {
          $upvote3.attr('value', '' );
        }
      } else {
        if ( $('button[data-type="btn-upvote"].is-selected').length >= 3 ) {
          alert('You can only upvote 3 Labs.');
          return;
        } 
        $this.addClass('is-selected');
        if ( $upvote1.val() === '' ) {
          $upvote1.attr('value', projectName );
        } else if ( $upvote2.val() === '' ) {
          $upvote2.attr('value', projectName );
        } else if ( $upvote3.val() === '' ) {
          $upvote3.attr('value', projectName );
        }
      }
    });

    $(document).on('click', 'button[data-type="btn-participate"]', function() {
      var $this = $(this);
      var projectName = $this.data('project-title');
      var $input = $('#input_55_3');
      if ($this.hasClass('is-selected')) {
        $this.removeClass('is-selected');
        $input.attr('value', '' );
      } else {
        if ( $('button[data-type="btn-participate"].is-selected').length >= 1 ) {
          alert('You can only select one participation preference.');
          return;
        }
        $this.addClass('is-selected');
        $input.attr('value', projectName );
      }
    });

    $(document).on('submit', '#gform_55', function(evt) {
      var errors = [];
      if (!$("#input_55_1_3").val().trim()) {
        errors.push('First name is required.');
      }
      if (!$("#input_55_1_6").val().trim()) {
        errors.push('Last name is required.');
      }
      if (!$("#input_55_2").val().trim()) {
        errors.push('Email is required.');
      }
      if ($('button[data-type="btn-participate"].is-selected').length <= 0) {
        errors.push('You must select a Lab you\'d prefer to participate in.');
      }
      if ($('button[data-type="btn-upvote"].is-selected').length <= 0) {
        errors.push('You must upvote at least one lab.');
      }

      if (errors.length > 0) {
        evt.preventDefault();
        var $ul = $('<ul>');
        for (var i = 0; i < errors.length; i++) {
          $ul.append($('<li>', {
            text: errors[i]
          }));
        }
        $('#alert-container').html($ul).show();
        $('#gform_ajax_spinner_55').remove();
      } else {
        $('#alert-container').hide();
      }
    });

  });

})(jQuery, this);
