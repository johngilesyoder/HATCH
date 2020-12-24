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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/asset/js/becauseofhatch-survey.js":
/*!***********************************************!*\
  !*** ./src/asset/js/becauseofhatch-survey.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($, root, undefined) {
  $(function () {
    'use strict'; // DOM ready, take it away

    $(document).on('change', '.collaboration-input', function () {
      if ($('.collaboration-input').is(':checked')) {
        $(this).closest('.collaboration-form').find('.collaboration-text').addClass('is--active');
      } else {
        $(this).closest('.collaboration-form').find('.collaboration-text').removeClass('is--active');
      }
    });
    var gravityForm = $('#gform_wrapper_57');
    $(document).on('input', 'textarea[data-input-id]', function () {
      $('#input_57_' + $(this).data('input-id')).text($(this).val());
    });
    $("#input-first-name").keyup(function () {
      var value = $(this).val();
      $("#input_57_1_3").attr('value', value);
    }).keyup();
    $("#input-last-name").keyup(function () {
      var value = $(this).val();
      $("#input_57_1_6").attr('value', value);
    }).keyup();
    $("#input-email").keyup(function () {
      var value = $(this).val();
      $("#input_57_2").attr('value', value);
    }).keyup();
  });
})(jQuery, this);

/***/ }),

/***/ 2:
/*!*****************************************************!*\
  !*** multi ./src/asset/js/becauseofhatch-survey.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/john/Sites/hatch/wp-content/themes/hatch/src/asset/js/becauseofhatch-survey.js */"./src/asset/js/becauseofhatch-survey.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0L2pzL2JlY2F1c2VvZmhhdGNoLXN1cnZleS5qcyJdLCJuYW1lcyI6WyIkIiwicm9vdCIsInVuZGVmaW5lZCIsImRvY3VtZW50Iiwib24iLCJpcyIsImNsb3Nlc3QiLCJmaW5kIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImdyYXZpdHlGb3JtIiwiZGF0YSIsInRleHQiLCJ2YWwiLCJrZXl1cCIsInZhbHVlIiwiYXR0ciIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOzs7UUFHQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMENBQTBDLGdDQUFnQztRQUMxRTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLHdEQUF3RCxrQkFBa0I7UUFDMUU7UUFDQSxpREFBaUQsY0FBYztRQUMvRDs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0EseUNBQXlDLGlDQUFpQztRQUMxRSxnSEFBZ0gsbUJBQW1CLEVBQUU7UUFDckk7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwyQkFBMkIsMEJBQTBCLEVBQUU7UUFDdkQsaUNBQWlDLGVBQWU7UUFDaEQ7UUFDQTtRQUNBOztRQUVBO1FBQ0Esc0RBQXNELCtEQUErRDs7UUFFckg7UUFDQTs7O1FBR0E7UUFDQTs7Ozs7Ozs7Ozs7O0FDbEZBLENBQUMsVUFBVUEsQ0FBVixFQUFhQyxJQUFiLEVBQW1CQyxTQUFuQixFQUE4QjtBQUU3QkYsR0FBQyxDQUFDLFlBQVk7QUFFWixpQkFGWSxDQUlaOztBQUNBQSxLQUFDLENBQUNHLFFBQUQsQ0FBRCxDQUFZQyxFQUFaLENBQWUsUUFBZixFQUF3QixzQkFBeEIsRUFBZ0QsWUFBVztBQUN6RCxVQUFJSixDQUFDLENBQUMsc0JBQUQsQ0FBRCxDQUEwQkssRUFBMUIsQ0FBNkIsVUFBN0IsQ0FBSixFQUErQztBQUM3Q0wsU0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRTSxPQUFSLENBQWdCLHFCQUFoQixFQUF1Q0MsSUFBdkMsQ0FBNEMscUJBQTVDLEVBQW1FQyxRQUFuRSxDQUE0RSxZQUE1RTtBQUNELE9BRkQsTUFFTztBQUNMUixTQUFDLENBQUMsSUFBRCxDQUFELENBQVFNLE9BQVIsQ0FBZ0IscUJBQWhCLEVBQXVDQyxJQUF2QyxDQUE0QyxxQkFBNUMsRUFBbUVFLFdBQW5FLENBQStFLFlBQS9FO0FBQ0Q7QUFFRixLQVBEO0FBVUEsUUFBSUMsV0FBVyxHQUFHVixDQUFDLENBQUMsbUJBQUQsQ0FBbkI7QUFFQUEsS0FBQyxDQUFDRyxRQUFELENBQUQsQ0FBWUMsRUFBWixDQUFlLE9BQWYsRUFBdUIseUJBQXZCLEVBQWtELFlBQVc7QUFDM0RKLE9BQUMsQ0FBQyxlQUFlQSxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFXLElBQVIsQ0FBYSxVQUFiLENBQWhCLENBQUQsQ0FBMkNDLElBQTNDLENBQWdEWixDQUFDLENBQUMsSUFBRCxDQUFELENBQVFhLEdBQVIsRUFBaEQ7QUFDRCxLQUZEO0FBSUFiLEtBQUMsQ0FBRSxtQkFBRixDQUFELENBQXlCYyxLQUF6QixDQUErQixZQUFXO0FBQ3hDLFVBQUlDLEtBQUssR0FBR2YsQ0FBQyxDQUFFLElBQUYsQ0FBRCxDQUFVYSxHQUFWLEVBQVo7QUFDQWIsT0FBQyxDQUFFLGVBQUYsQ0FBRCxDQUFxQmdCLElBQXJCLENBQTBCLE9BQTFCLEVBQW1DRCxLQUFuQztBQUNELEtBSEQsRUFJQ0QsS0FKRDtBQUtBZCxLQUFDLENBQUUsa0JBQUYsQ0FBRCxDQUF3QmMsS0FBeEIsQ0FBOEIsWUFBVztBQUN2QyxVQUFJQyxLQUFLLEdBQUdmLENBQUMsQ0FBRSxJQUFGLENBQUQsQ0FBVWEsR0FBVixFQUFaO0FBQ0FiLE9BQUMsQ0FBRSxlQUFGLENBQUQsQ0FBcUJnQixJQUFyQixDQUEwQixPQUExQixFQUFtQ0QsS0FBbkM7QUFDRCxLQUhELEVBSUNELEtBSkQ7QUFLQWQsS0FBQyxDQUFFLGNBQUYsQ0FBRCxDQUFvQmMsS0FBcEIsQ0FBMEIsWUFBVztBQUNuQyxVQUFJQyxLQUFLLEdBQUdmLENBQUMsQ0FBRSxJQUFGLENBQUQsQ0FBVWEsR0FBVixFQUFaO0FBQ0FiLE9BQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJnQixJQUFuQixDQUF3QixPQUF4QixFQUFpQ0QsS0FBakM7QUFDRCxLQUhELEVBSUNELEtBSkQ7QUFNRCxHQXJDQSxDQUFEO0FBdUNELENBekNELEVBeUNHRyxNQXpDSCxFQXlDVyxJQXpDWCxFIiwiZmlsZSI6ImJlY2F1c2VvZmhhdGNoLXN1cnZleS5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGdldHRlciB9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yID0gZnVuY3Rpb24oZXhwb3J0cykge1xuIFx0XHRpZih0eXBlb2YgU3ltYm9sICE9PSAndW5kZWZpbmVkJyAmJiBTeW1ib2wudG9TdHJpbmdUYWcpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbiBcdFx0fVxuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgJ19fZXNNb2R1bGUnLCB7IHZhbHVlOiB0cnVlIH0pO1xuIFx0fTtcblxuIFx0Ly8gY3JlYXRlIGEgZmFrZSBuYW1lc3BhY2Ugb2JqZWN0XG4gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbiBcdC8vIG1vZGUgJiAyOiBtZXJnZSBhbGwgcHJvcGVydGllcyBvZiB2YWx1ZSBpbnRvIHRoZSBuc1xuIFx0Ly8gbW9kZSAmIDQ6IHJldHVybiB2YWx1ZSB3aGVuIGFscmVhZHkgbnMgb2JqZWN0XG4gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnQgPSBmdW5jdGlvbih2YWx1ZSwgbW9kZSkge1xuIFx0XHRpZihtb2RlICYgMSkgdmFsdWUgPSBfX3dlYnBhY2tfcmVxdWlyZV9fKHZhbHVlKTtcbiBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbiBcdFx0aWYoKG1vZGUgJiA0KSAmJiB0eXBlb2YgdmFsdWUgPT09ICdvYmplY3QnICYmIHZhbHVlICYmIHZhbHVlLl9fZXNNb2R1bGUpIHJldHVybiB2YWx1ZTtcbiBcdFx0dmFyIG5zID0gT2JqZWN0LmNyZWF0ZShudWxsKTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KG5zLCAnZGVmYXVsdCcsIHsgZW51bWVyYWJsZTogdHJ1ZSwgdmFsdWU6IHZhbHVlIH0pO1xuIFx0XHRpZihtb2RlICYgMiAmJiB0eXBlb2YgdmFsdWUgIT0gJ3N0cmluZycpIGZvcih2YXIga2V5IGluIHZhbHVlKSBfX3dlYnBhY2tfcmVxdWlyZV9fLmQobnMsIGtleSwgZnVuY3Rpb24oa2V5KSB7IHJldHVybiB2YWx1ZVtrZXldOyB9LmJpbmQobnVsbCwga2V5KSk7XG4gXHRcdHJldHVybiBucztcbiBcdH07XG5cbiBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSBmdW5jdGlvbihtb2R1bGUpIHtcbiBcdFx0dmFyIGdldHRlciA9IG1vZHVsZSAmJiBtb2R1bGUuX19lc01vZHVsZSA/XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbiBcdFx0XHRmdW5jdGlvbiBnZXRNb2R1bGVFeHBvcnRzKCkgeyByZXR1cm4gbW9kdWxlOyB9O1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCAnYScsIGdldHRlcik7XG4gXHRcdHJldHVybiBnZXR0ZXI7XG4gXHR9O1xuXG4gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubyA9IGZ1bmN0aW9uKG9iamVjdCwgcHJvcGVydHkpIHsgcmV0dXJuIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbChvYmplY3QsIHByb3BlcnR5KTsgfTtcblxuIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbiBcdF9fd2VicGFja19yZXF1aXJlX18ucCA9IFwiXCI7XG5cblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAyKTtcbiIsIihmdW5jdGlvbiAoJCwgcm9vdCwgdW5kZWZpbmVkKSB7XG5cbiAgJChmdW5jdGlvbiAoKSB7XG5cbiAgICAndXNlIHN0cmljdCc7XG5cbiAgICAvLyBET00gcmVhZHksIHRha2UgaXQgYXdheVxuICAgICQoZG9jdW1lbnQpLm9uKCdjaGFuZ2UnLCcuY29sbGFib3JhdGlvbi1pbnB1dCcsIGZ1bmN0aW9uKCkge1xuICAgICAgaWYoICQoJy5jb2xsYWJvcmF0aW9uLWlucHV0JykuaXMoJzpjaGVja2VkJykgKSB7XG4gICAgICAgICQodGhpcykuY2xvc2VzdCgnLmNvbGxhYm9yYXRpb24tZm9ybScpLmZpbmQoJy5jb2xsYWJvcmF0aW9uLXRleHQnKS5hZGRDbGFzcygnaXMtLWFjdGl2ZScpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgJCh0aGlzKS5jbG9zZXN0KCcuY29sbGFib3JhdGlvbi1mb3JtJykuZmluZCgnLmNvbGxhYm9yYXRpb24tdGV4dCcpLnJlbW92ZUNsYXNzKCdpcy0tYWN0aXZlJyk7XG4gICAgICB9XG5cbiAgICB9KTtcblxuXG4gICAgdmFyIGdyYXZpdHlGb3JtID0gJCgnI2dmb3JtX3dyYXBwZXJfNTcnKTtcblxuICAgICQoZG9jdW1lbnQpLm9uKCdpbnB1dCcsJ3RleHRhcmVhW2RhdGEtaW5wdXQtaWRdJywgZnVuY3Rpb24oKSB7XG4gICAgICAkKCcjaW5wdXRfNTdfJyArICQodGhpcykuZGF0YSgnaW5wdXQtaWQnKSkudGV4dCgkKHRoaXMpLnZhbCgpKTtcbiAgICB9KTtcblxuICAgICQoIFwiI2lucHV0LWZpcnN0LW5hbWVcIiApLmtleXVwKGZ1bmN0aW9uKCkge1xuICAgICAgdmFyIHZhbHVlID0gJCggdGhpcyApLnZhbCgpO1xuICAgICAgJCggXCIjaW5wdXRfNTdfMV8zXCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcbiAgICAkKCBcIiNpbnB1dC1sYXN0LW5hbWVcIiApLmtleXVwKGZ1bmN0aW9uKCkge1xuICAgICAgdmFyIHZhbHVlID0gJCggdGhpcyApLnZhbCgpO1xuICAgICAgJCggXCIjaW5wdXRfNTdfMV82XCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcbiAgICAkKCBcIiNpbnB1dC1lbWFpbFwiICkua2V5dXAoZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgdmFsdWUgPSAkKCB0aGlzICkudmFsKCk7XG4gICAgICAkKCBcIiNpbnB1dF81N18yXCIgKS5hdHRyKCd2YWx1ZScsIHZhbHVlICk7XG4gICAgfSlcbiAgICAua2V5dXAoKTtcblxuICB9KTtcblxufSkoalF1ZXJ5LCB0aGlzKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=