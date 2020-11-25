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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/asset/js/hatching-better-world.js":
/*!***********************************************!*\
  !*** ./src/asset/js/hatching-better-world.js ***!
  \***********************************************/
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

/***/ 4:
/*!*****************************************************!*\
  !*** multi ./src/asset/js/hatching-better-world.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/john/Sites/hatch/wp-content/themes/hatch/src/asset/js/hatching-better-world.js */"./src/asset/js/hatching-better-world.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0L2pzL2hhdGNoaW5nLWJldHRlci13b3JsZC5qcyJdLCJuYW1lcyI6WyIkIiwicm9vdCIsInVuZGVmaW5lZCIsInJlYWRtb3JlIiwiY29sbGFwc2VkSGVpZ2h0IiwibGVzc0xpbmsiLCJtb3JlTGluayIsImRvY3VtZW50Iiwib24iLCJpcyIsImNsb3Nlc3QiLCJmaW5kIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImdyYXZpdHlGb3JtIiwiZGF0YSIsInRleHQiLCJ2YWwiLCJrZXl1cCIsInZhbHVlIiwiYXR0ciIsIiR0aGlzIiwicHJvamVjdE5hbWUiLCIkdXB2b3RlMSIsIiR1cHZvdGUyIiwiJHVwdm90ZTMiLCJoYXNDbGFzcyIsImxlbmd0aCIsImFsZXJ0IiwiJGlucHV0IiwiZXZ0IiwiZXJyb3JzIiwidHJpbSIsInB1c2giLCJwcmV2ZW50RGVmYXVsdCIsIiR1bCIsImkiLCJhcHBlbmQiLCJodG1sIiwic2hvdyIsInJlbW92ZSIsImhpZGUiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7UUFBQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDBDQUEwQyxnQ0FBZ0M7UUFDMUU7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSx3REFBd0Qsa0JBQWtCO1FBQzFFO1FBQ0EsaURBQWlELGNBQWM7UUFDL0Q7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBLHlDQUF5QyxpQ0FBaUM7UUFDMUUsZ0hBQWdILG1CQUFtQixFQUFFO1FBQ3JJO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMkJB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aGF0Y2hpbmctYmV0dGVyLXdvcmxkLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDQpO1xuIiwiKGZ1bmN0aW9uICgkLCByb290LCB1bmRlZmluZWQpIHtcblxuICAkKGZ1bmN0aW9uICgpIHtcblxuICAgICd1c2Ugc3RyaWN0JztcblxuICAgIC8vIERPTSByZWFkeSwgdGFrZSBpdCBhd2F5XG5cbiAgICAkKCcud3JhcHBlcicpLnJlYWRtb3JlKHtcbiAgICAgIGNvbGxhcHNlZEhlaWdodDogMzAwLFxuICAgICAgbGVzc0xpbms6ICc8YSBocmVmPVwiI1wiIGNsYXNzPVwiYnRuLW1vcmVcIj5SZWFkIGxlc3M8L2E+JyxcbiAgICAgIG1vcmVMaW5rOiAnPGEgaHJlZj1cIiNcIiBjbGFzcz1cImJ0bi1tb3JlXCI+UmVhZCBtb3JlPC9hPidcbiAgICB9KTtcblxuXG4gICAgJChkb2N1bWVudCkub24oJ2NoYW5nZScsJy5jb2xsYWJvcmF0aW9uLWlucHV0JywgZnVuY3Rpb24oKSB7XG4gICAgICBpZiggJCgnLmNvbGxhYm9yYXRpb24taW5wdXQnKS5pcygnOmNoZWNrZWQnKSApIHtcbiAgICAgICAgJCh0aGlzKS5jbG9zZXN0KCcuY29sbGFib3JhdGlvbi1mb3JtJykuZmluZCgnLmNvbGxhYm9yYXRpb24tdGV4dCcpLmFkZENsYXNzKCdpcy0tYWN0aXZlJyk7XG4gICAgICB9IGVsc2Uge1xuICAgICAgICAkKHRoaXMpLmNsb3Nlc3QoJy5jb2xsYWJvcmF0aW9uLWZvcm0nKS5maW5kKCcuY29sbGFib3JhdGlvbi10ZXh0JykucmVtb3ZlQ2xhc3MoJ2lzLS1hY3RpdmUnKTtcbiAgICAgIH1cblxuICAgIH0pO1xuXG5cbiAgICB2YXIgZ3Jhdml0eUZvcm0gPSAkKCcjZ2Zvcm1fd3JhcHBlcl81NScpO1xuXG4gICAgJChkb2N1bWVudCkub24oJ2lucHV0JywndGV4dGFyZWFbZGF0YS1pbnB1dC1pZF0nLCBmdW5jdGlvbigpIHtcbiAgICAgICQoJyNpbnB1dF81NV8nICsgJCh0aGlzKS5kYXRhKCdpbnB1dC1pZCcpKS50ZXh0KCQodGhpcykudmFsKCkpO1xuICAgIH0pO1xuXG4gICAgJCggXCIjaW5wdXQtZmlyc3QtbmFtZVwiICkua2V5dXAoZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgdmFsdWUgPSAkKCB0aGlzICkudmFsKCk7XG4gICAgICAkKCBcIiNpbnB1dF81NV8xXzNcIiApLmF0dHIoJ3ZhbHVlJywgdmFsdWUgKTtcbiAgICB9KVxuICAgIC5rZXl1cCgpO1xuICAgICQoIFwiI2lucHV0LWxhc3QtbmFtZVwiICkua2V5dXAoZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgdmFsdWUgPSAkKCB0aGlzICkudmFsKCk7XG4gICAgICAkKCBcIiNpbnB1dF81NV8xXzZcIiApLmF0dHIoJ3ZhbHVlJywgdmFsdWUgKTtcbiAgICB9KVxuICAgIC5rZXl1cCgpO1xuICAgICQoIFwiI2lucHV0LWVtYWlsXCIgKS5rZXl1cChmdW5jdGlvbigpIHtcbiAgICAgIHZhciB2YWx1ZSA9ICQoIHRoaXMgKS52YWwoKTtcbiAgICAgICQoIFwiI2lucHV0XzU1XzJcIiApLmF0dHIoJ3ZhbHVlJywgdmFsdWUgKTtcbiAgICB9KVxuICAgIC5rZXl1cCgpO1xuXG4gICAgJChkb2N1bWVudCkub24oJ2NsaWNrJywgJ2J1dHRvbltkYXRhLXR5cGU9XCJidG4tdXB2b3RlXCJdJywgZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgJHRoaXMgPSAkKHRoaXMpO1xuICAgICAgdmFyIHByb2plY3ROYW1lID0gJHRoaXMuZGF0YSgncHJvamVjdC10aXRsZScpO1xuICAgICAgdmFyICR1cHZvdGUxID0gJCgnI2lucHV0XzU1XzQnKTtcbiAgICAgIHZhciAkdXB2b3RlMiA9ICQoJyNpbnB1dF81NV81Jyk7XG4gICAgICB2YXIgJHVwdm90ZTMgPSAkKCcjaW5wdXRfNTVfNicpO1xuICAgICAgaWYgKCR0aGlzLmhhc0NsYXNzKCdpcy1zZWxlY3RlZCcpKSB7XG4gICAgICAgICR0aGlzLnJlbW92ZUNsYXNzKCdpcy1zZWxlY3RlZCcpO1xuICAgICAgICBpZiAoICR1cHZvdGUxLnZhbCgpID09PSBwcm9qZWN0TmFtZSApIHtcbiAgICAgICAgICAkdXB2b3RlMS5hdHRyKCd2YWx1ZScsICcnICk7XG4gICAgICAgIH0gZWxzZSBpZiAoICR1cHZvdGUyLnZhbCgpID09PSBwcm9qZWN0TmFtZSApIHtcbiAgICAgICAgICAkdXB2b3RlMi5hdHRyKCd2YWx1ZScsICcnICk7XG4gICAgICAgIH0gZWxzZSBpZiAoICR1cHZvdGUzLnZhbCgpID09PSBwcm9qZWN0TmFtZSApIHtcbiAgICAgICAgICAkdXB2b3RlMy5hdHRyKCd2YWx1ZScsICcnICk7XG4gICAgICAgIH1cbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIGlmICggJCgnYnV0dG9uW2RhdGEtdHlwZT1cImJ0bi11cHZvdGVcIl0uaXMtc2VsZWN0ZWQnKS5sZW5ndGggPj0gMyApIHtcbiAgICAgICAgICBhbGVydCgnWW91IGNhbiBvbmx5IHVwdm90ZSAzIExhYnMuJyk7XG4gICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9IFxuICAgICAgICAkdGhpcy5hZGRDbGFzcygnaXMtc2VsZWN0ZWQnKTtcbiAgICAgICAgaWYgKCAkdXB2b3RlMS52YWwoKSA9PT0gJycgKSB7XG4gICAgICAgICAgJHVwdm90ZTEuYXR0cigndmFsdWUnLCBwcm9qZWN0TmFtZSApO1xuICAgICAgICB9IGVsc2UgaWYgKCAkdXB2b3RlMi52YWwoKSA9PT0gJycgKSB7XG4gICAgICAgICAgJHVwdm90ZTIuYXR0cigndmFsdWUnLCBwcm9qZWN0TmFtZSApO1xuICAgICAgICB9IGVsc2UgaWYgKCAkdXB2b3RlMy52YWwoKSA9PT0gJycgKSB7XG4gICAgICAgICAgJHVwdm90ZTMuYXR0cigndmFsdWUnLCBwcm9qZWN0TmFtZSApO1xuICAgICAgICB9XG4gICAgICB9XG4gICAgfSk7XG5cbiAgICAkKGRvY3VtZW50KS5vbignY2xpY2snLCAnYnV0dG9uW2RhdGEtdHlwZT1cImJ0bi1wYXJ0aWNpcGF0ZVwiXScsIGZ1bmN0aW9uKCkge1xuICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcbiAgICAgIHZhciBwcm9qZWN0TmFtZSA9ICR0aGlzLmRhdGEoJ3Byb2plY3QtdGl0bGUnKTtcbiAgICAgIHZhciAkaW5wdXQgPSAkKCcjaW5wdXRfNTVfMycpO1xuICAgICAgaWYgKCR0aGlzLmhhc0NsYXNzKCdpcy1zZWxlY3RlZCcpKSB7XG4gICAgICAgICR0aGlzLnJlbW92ZUNsYXNzKCdpcy1zZWxlY3RlZCcpO1xuICAgICAgICAkaW5wdXQuYXR0cigndmFsdWUnLCAnJyApO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgaWYgKCAkKCdidXR0b25bZGF0YS10eXBlPVwiYnRuLXBhcnRpY2lwYXRlXCJdLmlzLXNlbGVjdGVkJykubGVuZ3RoID49IDEgKSB7XG4gICAgICAgICAgYWxlcnQoJ1lvdSBjYW4gb25seSBzZWxlY3Qgb25lIHBhcnRpY2lwYXRpb24gcHJlZmVyZW5jZS4nKTtcbiAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cbiAgICAgICAgJHRoaXMuYWRkQ2xhc3MoJ2lzLXNlbGVjdGVkJyk7XG4gICAgICAgICRpbnB1dC5hdHRyKCd2YWx1ZScsIHByb2plY3ROYW1lICk7XG4gICAgICB9XG4gICAgfSk7XG5cbiAgICAkKGRvY3VtZW50KS5vbignc3VibWl0JywgJyNnZm9ybV81NScsIGZ1bmN0aW9uKGV2dCkge1xuICAgICAgdmFyIGVycm9ycyA9IFtdO1xuICAgICAgaWYgKCEkKFwiI2lucHV0XzU1XzFfM1wiKS52YWwoKS50cmltKCkpIHtcbiAgICAgICAgZXJyb3JzLnB1c2goJ0ZpcnN0IG5hbWUgaXMgcmVxdWlyZWQuJyk7XG4gICAgICB9XG4gICAgICBpZiAoISQoXCIjaW5wdXRfNTVfMV82XCIpLnZhbCgpLnRyaW0oKSkge1xuICAgICAgICBlcnJvcnMucHVzaCgnTGFzdCBuYW1lIGlzIHJlcXVpcmVkLicpO1xuICAgICAgfVxuICAgICAgaWYgKCEkKFwiI2lucHV0XzU1XzJcIikudmFsKCkudHJpbSgpKSB7XG4gICAgICAgIGVycm9ycy5wdXNoKCdFbWFpbCBpcyByZXF1aXJlZC4nKTtcbiAgICAgIH1cbiAgICAgIGlmICgkKCdidXR0b25bZGF0YS10eXBlPVwiYnRuLXBhcnRpY2lwYXRlXCJdLmlzLXNlbGVjdGVkJykubGVuZ3RoIDw9IDApIHtcbiAgICAgICAgZXJyb3JzLnB1c2goJ1lvdSBtdXN0IHNlbGVjdCBhIExhYiB5b3VcXCdkIHByZWZlciB0byBwYXJ0aWNpcGF0ZSBpbi4nKTtcbiAgICAgIH1cbiAgICAgIGlmICgkKCdidXR0b25bZGF0YS10eXBlPVwiYnRuLXVwdm90ZVwiXS5pcy1zZWxlY3RlZCcpLmxlbmd0aCA8PSAwKSB7XG4gICAgICAgIGVycm9ycy5wdXNoKCdZb3UgbXVzdCB1cHZvdGUgYXQgbGVhc3Qgb25lIGxhYi4nKTtcbiAgICAgIH1cblxuICAgICAgaWYgKGVycm9ycy5sZW5ndGggPiAwKSB7XG4gICAgICAgIGV2dC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB2YXIgJHVsID0gJCgnPHVsPicpO1xuICAgICAgICBmb3IgKHZhciBpID0gMDsgaSA8IGVycm9ycy5sZW5ndGg7IGkrKykge1xuICAgICAgICAgICR1bC5hcHBlbmQoJCgnPGxpPicsIHtcbiAgICAgICAgICAgIHRleHQ6IGVycm9yc1tpXVxuICAgICAgICAgIH0pKTtcbiAgICAgICAgfVxuICAgICAgICAkKCcjYWxlcnQtY29udGFpbmVyJykuaHRtbCgkdWwpLnNob3coKTtcbiAgICAgICAgJCgnI2dmb3JtX2FqYXhfc3Bpbm5lcl81NScpLnJlbW92ZSgpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgJCgnI2FsZXJ0LWNvbnRhaW5lcicpLmhpZGUoKTtcbiAgICAgIH1cbiAgICB9KTtcblxuICB9KTtcblxufSkoalF1ZXJ5LCB0aGlzKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=