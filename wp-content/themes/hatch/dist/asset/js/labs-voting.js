/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/asset/js/labs-voting.js":
/*!*************************************!*\
  !*** ./src/asset/js/labs-voting.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($, root, undefined) {
  $(function () {
    'use strict'; // DOM ready, take it away

    $('.wrapper').readmore({
      collapsedHeight: 300,
      lessLink: '<a href="#" class="btn-more">Read less</a>',
      moreLink: '<a href="#" class="btn-more">Read more</a>'
    });
    $(document).on('change', '.collaboration-input', function () {
      if ($('.collaboration-input').is(':checked')) {
        $(this).closest('.collaboration-form').find('.collaboration-text').addClass('is--active');
      } else {
        $(this).closest('.collaboration-form').find('.collaboration-text').removeClass('is--active');
      }
    });
    var gravityForm = $('#gform_wrapper_55');
    $(document).on('input', 'textarea[data-input-id]', function () {
      $('#input_55_' + $(this).data('input-id')).text($(this).val());
    });
    $("#input-first-name").keyup(function () {
      var value = $(this).val();
      $("#input_55_1_3").attr('value', value);
    }).keyup();
    $("#input-last-name").keyup(function () {
      var value = $(this).val();
      $("#input_55_1_6").attr('value', value);
    }).keyup();
    $("#input-email").keyup(function () {
      var value = $(this).val();
      $("#input_55_2").attr('value', value);
    }).keyup();
    $(document).on('click', 'button[data-type="btn-upvote"]', function () {
      var $this = $(this);
      var projectName = $this.data('project-title');
      var $upvote1 = $('#input_55_4');
      var $upvote2 = $('#input_55_5');
      var $upvote3 = $('#input_55_6');

      if ($this.hasClass('is-selected')) {
        $this.removeClass('is-selected');

        if ($upvote1.val() === projectName) {
          $upvote1.attr('value', '');
        } else if ($upvote2.val() === projectName) {
          $upvote2.attr('value', '');
        } else if ($upvote3.val() === projectName) {
          $upvote3.attr('value', '');
        }
      } else {
        if ($('button[data-type="btn-upvote"].is-selected').length >= 3) {
          alert('You can only upvote 3 Labs.');
          return;
        }

        $this.addClass('is-selected');

        if ($upvote1.val() === '') {
          $upvote1.attr('value', projectName);
        } else if ($upvote2.val() === '') {
          $upvote2.attr('value', projectName);
        } else if ($upvote3.val() === '') {
          $upvote3.attr('value', projectName);
        }
      }
    });
    $(document).on('click', 'button[data-type="btn-participate"]', function () {
      var $this = $(this);
      var projectName = $this.data('project-title');
      var $input = $('#input_55_3');

      if ($this.hasClass('is-selected')) {
        $this.removeClass('is-selected');
        $input.attr('value', '');
      } else {
        if ($('button[data-type="btn-participate"].is-selected').length >= 1) {
          alert('You can only select one participation preference.');
          return;
        }

        $this.addClass('is-selected');
        $input.attr('value', projectName);
      }
    });
    $(document).on('submit', '#gform_55', function (evt) {
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

/***/ }),

/***/ 5:
/*!*******************************************!*\
  !*** multi ./src/asset/js/labs-voting.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/john/Sites/hatch/wp-content/themes/hatch/src/asset/js/labs-voting.js */"./src/asset/js/labs-voting.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0L2pzL2xhYnMtdm90aW5nLmpzIl0sIm5hbWVzIjpbIiQiLCJyb290IiwidW5kZWZpbmVkIiwicmVhZG1vcmUiLCJjb2xsYXBzZWRIZWlnaHQiLCJsZXNzTGluayIsIm1vcmVMaW5rIiwiZG9jdW1lbnQiLCJvbiIsImlzIiwiY2xvc2VzdCIsImZpbmQiLCJhZGRDbGFzcyIsInJlbW92ZUNsYXNzIiwiZ3Jhdml0eUZvcm0iLCJkYXRhIiwidGV4dCIsInZhbCIsImtleXVwIiwidmFsdWUiLCJhdHRyIiwiJHRoaXMiLCJwcm9qZWN0TmFtZSIsIiR1cHZvdGUxIiwiJHVwdm90ZTIiLCIkdXB2b3RlMyIsImhhc0NsYXNzIiwibGVuZ3RoIiwiYWxlcnQiLCIkaW5wdXQiLCJldnQiLCJlcnJvcnMiLCJ0cmltIiwicHVzaCIsInByZXZlbnREZWZhdWx0IiwiJHVsIiwiaSIsImFwcGVuZCIsImh0bWwiLCJzaG93IiwicmVtb3ZlIiwiaGlkZSIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOzs7UUFHQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMENBQTBDLGdDQUFnQztRQUMxRTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLHdEQUF3RCxrQkFBa0I7UUFDMUU7UUFDQSxpREFBaUQsY0FBYztRQUMvRDs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0EseUNBQXlDLGlDQUFpQztRQUMxRSxnSEFBZ0gsbUJBQW1CLEVBQUU7UUFDckk7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwyQkFBMkIsMEJBQTBC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Zy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSA1KTtcbiIsIihmdW5jdGlvbiAoJCwgcm9vdCwgdW5kZWZpbmVkKSB7XG5cbiAgJChmdW5jdGlvbiAoKSB7XG5cbiAgICAndXNlIHN0cmljdCc7XG5cbiAgICAvLyBET00gcmVhZHksIHRha2UgaXQgYXdheVxuXG4gICAgJCgnLndyYXBwZXInKS5yZWFkbW9yZSh7XG4gICAgICBjb2xsYXBzZWRIZWlnaHQ6IDMwMCxcbiAgICAgIGxlc3NMaW5rOiAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImJ0bi1tb3JlXCI+UmVhZCBsZXNzPC9hPicsXG4gICAgICBtb3JlTGluazogJzxhIGhyZWY9XCIjXCIgY2xhc3M9XCJidG4tbW9yZVwiPlJlYWQgbW9yZTwvYT4nXG4gICAgfSk7XG5cblxuICAgICQoZG9jdW1lbnQpLm9uKCdjaGFuZ2UnLCcuY29sbGFib3JhdGlvbi1pbnB1dCcsIGZ1bmN0aW9uKCkge1xuICAgICAgaWYoICQoJy5jb2xsYWJvcmF0aW9uLWlucHV0JykuaXMoJzpjaGVja2VkJykgKSB7XG4gICAgICAgICQodGhpcykuY2xvc2VzdCgnLmNvbGxhYm9yYXRpb24tZm9ybScpLmZpbmQoJy5jb2xsYWJvcmF0aW9uLXRleHQnKS5hZGRDbGFzcygnaXMtLWFjdGl2ZScpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgJCh0aGlzKS5jbG9zZXN0KCcuY29sbGFib3JhdGlvbi1mb3JtJykuZmluZCgnLmNvbGxhYm9yYXRpb24tdGV4dCcpLnJlbW92ZUNsYXNzKCdpcy0tYWN0aXZlJyk7XG4gICAgICB9XG5cbiAgICB9KTtcblxuXG4gICAgdmFyIGdyYXZpdHlGb3JtID0gJCgnI2dmb3JtX3dyYXBwZXJfNTUnKTtcblxuICAgICQoZG9jdW1lbnQpLm9uKCdpbnB1dCcsJ3RleHRhcmVhW2RhdGEtaW5wdXQtaWRdJywgZnVuY3Rpb24oKSB7XG4gICAgICAkKCcjaW5wdXRfNTVfJyArICQodGhpcykuZGF0YSgnaW5wdXQtaWQnKSkudGV4dCgkKHRoaXMpLnZhbCgpKTtcbiAgICB9KTtcblxuICAgICQoIFwiI2lucHV0LWZpcnN0LW5hbWVcIiApLmtleXVwKGZ1bmN0aW9uKCkge1xuICAgICAgdmFyIHZhbHVlID0gJCggdGhpcyApLnZhbCgpO1xuICAgICAgJCggXCIjaW5wdXRfNTVfMV8zXCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcbiAgICAkKCBcIiNpbnB1dC1sYXN0LW5hbWVcIiApLmtleXVwKGZ1bmN0aW9uKCkge1xuICAgICAgdmFyIHZhbHVlID0gJCggdGhpcyApLnZhbCgpO1xuICAgICAgJCggXCIjaW5wdXRfNTVfMV82XCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcbiAgICAkKCBcIiNpbnB1dC1lbWFpbFwiICkua2V5dXAoZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgdmFsdWUgPSAkKCB0aGlzICkudmFsKCk7XG4gICAgICAkKCBcIiNpbnB1dF81NV8yXCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcblxuICAgICQoZG9jdW1lbnQpLm9uKCdjbGljaycsICdidXR0b25bZGF0YS10eXBlPVwiYnRuLXVwdm90ZVwiXScsIGZ1bmN0aW9uKCkge1xuICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcbiAgICAgIHZhciBwcm9qZWN0TmFtZSA9ICR0aGlzLmRhdGEoJ3Byb2plY3QtdGl0bGUnKTtcbiAgICAgIHZhciAkdXB2b3RlMSA9ICQoJyNpbnB1dF81NV80Jyk7XG4gICAgICB2YXIgJHVwdm90ZTIgPSAkKCcjaW5wdXRfNTVfNScpO1xuICAgICAgdmFyICR1cHZvdGUzID0gJCgnI2lucHV0XzU1XzYnKTtcbiAgICAgIGlmICgkdGhpcy5oYXNDbGFzcygnaXMtc2VsZWN0ZWQnKSkge1xuICAgICAgICAkdGhpcy5yZW1vdmVDbGFzcygnaXMtc2VsZWN0ZWQnKTtcbiAgICAgICAgaWYgKCAkdXB2b3RlMS52YWwoKSA9PT0gcHJvamVjdE5hbWUgKSB7XG4gICAgICAgICAgJHVwdm90ZTEuYXR0cigndmFsdWUnLCAnJyApO1xuICAgICAgICB9IGVsc2UgaWYgKCAkdXB2b3RlMi52YWwoKSA9PT0gcHJvamVjdE5hbWUgKSB7XG4gICAgICAgICAgJHVwdm90ZTIuYXR0cigndmFsdWUnLCAnJyApO1xuICAgICAgICB9IGVsc2UgaWYgKCAkdXB2b3RlMy52YWwoKSA9PT0gcHJvamVjdE5hbWUgKSB7XG4gICAgICAgICAgJHVwdm90ZTMuYXR0cigndmFsdWUnLCAnJyApO1xuICAgICAgICB9XG4gICAgICB9IGVsc2Uge1xuICAgICAgICBpZiAoICQoJ2J1dHRvbltkYXRhLXR5cGU9XCJidG4tdXB2b3RlXCJdLmlzLXNlbGVjdGVkJykubGVuZ3RoID49IDMgKSB7XG4gICAgICAgICAgYWxlcnQoJ1lvdSBjYW4gb25seSB1cHZvdGUgMyBMYWJzLicpO1xuICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfSBcbiAgICAgICAgJHRoaXMuYWRkQ2xhc3MoJ2lzLXNlbGVjdGVkJyk7XG4gICAgICAgIGlmICggJHVwdm90ZTEudmFsKCkgPT09ICcnICkge1xuICAgICAgICAgICR1cHZvdGUxLmF0dHIoJ3ZhbHVlJywgcHJvamVjdE5hbWUgKTtcbiAgICAgICAgfSBlbHNlIGlmICggJHVwdm90ZTIudmFsKCkgPT09ICcnICkge1xuICAgICAgICAgICR1cHZvdGUyLmF0dHIoJ3ZhbHVlJywgcHJvamVjdE5hbWUgKTtcbiAgICAgICAgfSBlbHNlIGlmICggJHVwdm90ZTMudmFsKCkgPT09ICcnICkge1xuICAgICAgICAgICR1cHZvdGUzLmF0dHIoJ3ZhbHVlJywgcHJvamVjdE5hbWUgKTtcbiAgICAgICAgfVxuICAgICAgfVxuICAgIH0pO1xuXG4gICAgJChkb2N1bWVudCkub24oJ2NsaWNrJywgJ2J1dHRvbltkYXRhLXR5cGU9XCJidG4tcGFydGljaXBhdGVcIl0nLCBmdW5jdGlvbigpIHtcbiAgICAgIHZhciAkdGhpcyA9ICQodGhpcyk7XG4gICAgICB2YXIgcHJvamVjdE5hbWUgPSAkdGhpcy5kYXRhKCdwcm9qZWN0LXRpdGxlJyk7XG4gICAgICB2YXIgJGlucHV0ID0gJCgnI2lucHV0XzU1XzMnKTtcbiAgICAgIGlmICgkdGhpcy5oYXNDbGFzcygnaXMtc2VsZWN0ZWQnKSkge1xuICAgICAgICAkdGhpcy5yZW1vdmVDbGFzcygnaXMtc2VsZWN0ZWQnKTtcbiAgICAgICAgJGlucHV0LmF0dHIoJ3ZhbHVlJywgJycgKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIGlmICggJCgnYnV0dG9uW2RhdGEtdHlwZT1cImJ0bi1wYXJ0aWNpcGF0ZVwiXS5pcy1zZWxlY3RlZCcpLmxlbmd0aCA+PSAxICkge1xuICAgICAgICAgIGFsZXJ0KCdZb3UgY2FuIG9ubHkgc2VsZWN0IG9uZSBwYXJ0aWNpcGF0aW9uIHByZWZlcmVuY2UuJyk7XG4gICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgICR0aGlzLmFkZENsYXNzKCdpcy1zZWxlY3RlZCcpO1xuICAgICAgICAkaW5wdXQuYXR0cigndmFsdWUnLCBwcm9qZWN0TmFtZSApO1xuICAgICAgfVxuICAgIH0pO1xuXG4gICAgJChkb2N1bWVudCkub24oJ3N1Ym1pdCcsICcjZ2Zvcm1fNTUnLCBmdW5jdGlvbihldnQpIHtcbiAgICAgIHZhciBlcnJvcnMgPSBbXTtcbiAgICAgIGlmICghJChcIiNpbnB1dF81NV8xXzNcIikudmFsKCkudHJpbSgpKSB7XG4gICAgICAgIGVycm9ycy5wdXNoKCdGaXJzdCBuYW1lIGlzIHJlcXVpcmVkLicpO1xuICAgICAgfVxuICAgICAgaWYgKCEkKFwiI2lucHV0XzU1XzFfNlwiKS52YWwoKS50cmltKCkpIHtcbiAgICAgICAgZXJyb3JzLnB1c2goJ0xhc3QgbmFtZSBpcyByZXF1aXJlZC4nKTtcbiAgICAgIH1cbiAgICAgIGlmICghJChcIiNpbnB1dF81NV8yXCIpLnZhbCgpLnRyaW0oKSkge1xuICAgICAgICBlcnJvcnMucHVzaCgnRW1haWwgaXMgcmVxdWlyZWQuJyk7XG4gICAgICB9XG4gICAgICBpZiAoJCgnYnV0dG9uW2RhdGEtdHlwZT1cImJ0bi1wYXJ0aWNpcGF0ZVwiXS5pcy1zZWxlY3RlZCcpLmxlbmd0aCA8PSAwKSB7XG4gICAgICAgIGVycm9ycy5wdXNoKCdZb3UgbXVzdCBzZWxlY3QgYSBMYWIgeW91XFwnZCBwcmVmZXIgdG8gcGFydGljaXBhdGUgaW4uJyk7XG4gICAgICB9XG4gICAgICBpZiAoJCgnYnV0dG9uW2RhdGEtdHlwZT1cImJ0bi11cHZvdGVcIl0uaXMtc2VsZWN0ZWQnKS5sZW5ndGggPD0gMCkge1xuICAgICAgICBlcnJvcnMucHVzaCgnWW91IG11c3QgdXB2b3RlIGF0IGxlYXN0IG9uZSBsYWIuJyk7XG4gICAgICB9XG5cbiAgICAgIGlmIChlcnJvcnMubGVuZ3RoID4gMCkge1xuICAgICAgICBldnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgdmFyICR1bCA9ICQoJzx1bD4nKTtcbiAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBlcnJvcnMubGVuZ3RoOyBpKyspIHtcbiAgICAgICAgICAkdWwuYXBwZW5kKCQoJzxsaT4nLCB7XG4gICAgICAgICAgICB0ZXh0OiBlcnJvcnNbaV1cbiAgICAgICAgICB9KSk7XG4gICAgICAgIH1cbiAgICAgICAgJCgnI2FsZXJ0LWNvbnRhaW5lcicpLmh0bWwoJHVsKS5zaG93KCk7XG4gICAgICAgICQoJyNnZm9ybV9hamF4X3NwaW5uZXJfNTUnKS5yZW1vdmUoKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgICQoJyNhbGVydC1jb250YWluZXInKS5oaWRlKCk7XG4gICAgICB9XG4gICAgfSk7XG5cbiAgfSk7XG5cbn0pKGpRdWVyeSwgdGhpcyk7XG4iXSwic291cmNlUm9vdCI6IiJ9