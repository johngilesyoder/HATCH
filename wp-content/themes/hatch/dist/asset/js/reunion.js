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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/asset/js/reunion.js":
/*!*********************************!*\
  !*** ./src/asset/js/reunion.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($, root, undefined) {
  $(function () {
    'use strict'; // DOM ready, take it away

    var scrollHeight = $(".site-header").height() + $(".reunion-hero").height();
    var persistentCta = $('#persistent-cta');
    $(window).on('scroll', function () {
      var scrollPosition = $(window).scrollTop();

      if (scrollPosition > scrollHeight) {
        persistentCta.addClass('is--visible');
      } else {
        persistentCta.removeClass('is--visible');
      }
    }); // Select all links with hashes

    $('a[href*="#"]') // Remove links that don't actually link to anything
    .not('[href="#"]').not('[href="#0"]').click(function (event) {
      // On-page links
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?

        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();

            if ($target.is(":focus")) {
              // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

              $target.focus(); // Set focus again
            }

            ;
          });
        }
      }
    });
  });
})(jQuery, this);

/***/ }),

/***/ 7:
/*!***************************************!*\
  !*** multi ./src/asset/js/reunion.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/john/Sites/hatch/wp-content/themes/hatch/src/asset/js/reunion.js */"./src/asset/js/reunion.js");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Fzc2V0L2pzL3JldW5pb24uanMiXSwibmFtZXMiOlsiJCIsInJvb3QiLCJ1bmRlZmluZWQiLCJzY3JvbGxIZWlnaHQiLCJoZWlnaHQiLCJwZXJzaXN0ZW50Q3RhIiwid2luZG93Iiwib24iLCJzY3JvbGxQb3NpdGlvbiIsInNjcm9sbFRvcCIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJub3QiLCJjbGljayIsImV2ZW50IiwibG9jYXRpb24iLCJwYXRobmFtZSIsInJlcGxhY2UiLCJob3N0bmFtZSIsInRhcmdldCIsImhhc2giLCJsZW5ndGgiLCJzbGljZSIsInByZXZlbnREZWZhdWx0IiwiYW5pbWF0ZSIsIm9mZnNldCIsInRvcCIsIiR0YXJnZXQiLCJmb2N1cyIsImlzIiwiYXR0ciIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IjtRQUFBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBOzs7UUFHQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMENBQTBDLGdDQUFnQztRQUMxRTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLHdEQUF3RCxrQkFBa0I7UUFDMUU7UUFDQSxpREFBaUQsY0FBYztRQUMvRDs7UUFFQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0EseUNBQXlDLGlDQUFpQztRQUMxRSxnSEFBZ0gsbUJBQW1CLEVBQUU7UUFDckk7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSwyQkFBMkIsMEJBQTBCLEVBQUU7UUFDdkQsaUNBQWlDLGVBQWU7UUFDaEQ7UUFDQTtRQUNBOztRQUVBO1FBQ0Esc0RBQXNELCtEQUErRDs7UUFFckg7UUFDQTs7O1FBR0E7UUFDQTs7Ozs7Ozs7Ozs7O0FDbEZBLENBQUMsVUFBVUEsQ0FBVixFQUFhQyxJQUFiLEVBQW1CQyxTQUFuQixFQUE4QjtBQUU5QkYsR0FBQyxDQUFDLFlBQVk7QUFFYixpQkFGYSxDQUdiOztBQUVFLFFBQUlHLFlBQVksR0FBR0gsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQkksTUFBbEIsS0FBNkJKLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJJLE1BQW5CLEVBQWhEO0FBQ0YsUUFBSUMsYUFBYSxHQUFHTCxDQUFDLENBQUMsaUJBQUQsQ0FBckI7QUFFQUEsS0FBQyxDQUFDTSxNQUFELENBQUQsQ0FBVUMsRUFBVixDQUFhLFFBQWIsRUFBdUIsWUFBVTtBQUMvQixVQUFJQyxjQUFjLEdBQUdSLENBQUMsQ0FBQ00sTUFBRCxDQUFELENBQVVHLFNBQVYsRUFBckI7O0FBRUEsVUFBSUQsY0FBYyxHQUFHTCxZQUFyQixFQUFtQztBQUNqQ0UscUJBQWEsQ0FBQ0ssUUFBZCxDQUF1QixhQUF2QjtBQUNELE9BRkQsTUFFTztBQUNMTCxxQkFBYSxDQUFDTSxXQUFkLENBQTBCLGFBQTFCO0FBQ0Q7QUFDRixLQVJELEVBUmEsQ0FrQmI7O0FBQ0FYLEtBQUMsQ0FBQyxjQUFELENBQUQsQ0FDRTtBQURGLEtBRUdZLEdBRkgsQ0FFTyxZQUZQLEVBR0dBLEdBSEgsQ0FHTyxhQUhQLEVBSUdDLEtBSkgsQ0FJUyxVQUFTQyxLQUFULEVBQWdCO0FBQ3JCO0FBQ0EsVUFDRUMsUUFBUSxDQUFDQyxRQUFULENBQWtCQyxPQUFsQixDQUEwQixLQUExQixFQUFpQyxFQUFqQyxLQUF3QyxLQUFLRCxRQUFMLENBQWNDLE9BQWQsQ0FBc0IsS0FBdEIsRUFBNkIsRUFBN0IsQ0FBeEMsSUFFQUYsUUFBUSxDQUFDRyxRQUFULElBQXFCLEtBQUtBLFFBSDVCLEVBSUU7QUFDQTtBQUNBLFlBQUlDLE1BQU0sR0FBR25CLENBQUMsQ0FBQyxLQUFLb0IsSUFBTixDQUFkO0FBQ0FELGNBQU0sR0FBR0EsTUFBTSxDQUFDRSxNQUFQLEdBQWdCRixNQUFoQixHQUF5Qm5CLENBQUMsQ0FBQyxXQUFXLEtBQUtvQixJQUFMLENBQVVFLEtBQVYsQ0FBZ0IsQ0FBaEIsQ0FBWCxHQUFnQyxHQUFqQyxDQUFuQyxDQUhBLENBSUE7O0FBQ0EsWUFBSUgsTUFBTSxDQUFDRSxNQUFYLEVBQW1CO0FBQ2pCO0FBQ0FQLGVBQUssQ0FBQ1MsY0FBTjtBQUNBdkIsV0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQndCLE9BQWhCLENBQXdCO0FBQ3RCZixxQkFBUyxFQUFFVSxNQUFNLENBQUNNLE1BQVAsR0FBZ0JDO0FBREwsV0FBeEIsRUFFRyxJQUZILEVBRVMsWUFBVztBQUNsQjtBQUNBO0FBQ0EsZ0JBQUlDLE9BQU8sR0FBRzNCLENBQUMsQ0FBQ21CLE1BQUQsQ0FBZjtBQUNBUSxtQkFBTyxDQUFDQyxLQUFSOztBQUNBLGdCQUFJRCxPQUFPLENBQUNFLEVBQVIsQ0FBVyxRQUFYLENBQUosRUFBMEI7QUFBRTtBQUMxQixxQkFBTyxLQUFQO0FBQ0QsYUFGRCxNQUVPO0FBQ0xGLHFCQUFPLENBQUNHLElBQVIsQ0FBYSxVQUFiLEVBQXdCLElBQXhCLEVBREssQ0FDMEI7O0FBQy9CSCxxQkFBTyxDQUFDQyxLQUFSLEdBRkssQ0FFWTtBQUNsQjs7QUFBQTtBQUNGLFdBYkQ7QUFjRDtBQUNGO0FBQ0YsS0FsQ0g7QUFvQ0MsR0F2REQsQ0FBRDtBQXlEQSxDQTNERCxFQTJER0csTUEzREgsRUEyRFcsSUEzRFgsRSIsImZpbGUiOiJyZXVuaW9uLmpzIiwic291cmNlc0NvbnRlbnQiOlsiIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuIFx0dmFyIGluc3RhbGxlZE1vZHVsZXMgPSB7fTtcblxuIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbiBcdGZ1bmN0aW9uIF9fd2VicGFja19yZXF1aXJlX18obW9kdWxlSWQpIHtcblxuIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbiBcdFx0aWYoaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0pIHtcbiBcdFx0XHRyZXR1cm4gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0uZXhwb3J0cztcbiBcdFx0fVxuIFx0XHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuIFx0XHR2YXIgbW9kdWxlID0gaW5zdGFsbGVkTW9kdWxlc1ttb2R1bGVJZF0gPSB7XG4gXHRcdFx0aTogbW9kdWxlSWQsXG4gXHRcdFx0bDogZmFsc2UsXG4gXHRcdFx0ZXhwb3J0czoge31cbiBcdFx0fTtcblxuIFx0XHQvLyBFeGVjdXRlIHRoZSBtb2R1bGUgZnVuY3Rpb25cbiBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cbiBcdFx0Ly8gRmxhZyB0aGUgbW9kdWxlIGFzIGxvYWRlZFxuIFx0XHRtb2R1bGUubCA9IHRydWU7XG5cbiBcdFx0Ly8gUmV0dXJuIHRoZSBleHBvcnRzIG9mIHRoZSBtb2R1bGVcbiBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuIFx0fVxuXG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBtb2R1bGVzO1xuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZSBjYWNoZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5jID0gaW5zdGFsbGVkTW9kdWxlcztcblxuIFx0Ly8gZGVmaW5lIGdldHRlciBmdW5jdGlvbiBmb3IgaGFybW9ueSBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQgPSBmdW5jdGlvbihleHBvcnRzLCBuYW1lLCBnZXR0ZXIpIHtcbiBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBuYW1lLCB7IGVudW1lcmFibGU6IHRydWUsIGdldDogZ2V0dGVyIH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBkZWZpbmUgX19lc01vZHVsZSBvbiBleHBvcnRzXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4gXHRcdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuIFx0XHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuIFx0XHR9XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG4gXHR9O1xuXG4gXHQvLyBjcmVhdGUgYSBmYWtlIG5hbWVzcGFjZSBvYmplY3RcbiBcdC8vIG1vZGUgJiAxOiB2YWx1ZSBpcyBhIG1vZHVsZSBpZCwgcmVxdWlyZSBpdFxuIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4gXHQvLyBtb2RlICYgNDogcmV0dXJuIHZhbHVlIHdoZW4gYWxyZWFkeSBucyBvYmplY3RcbiBcdC8vIG1vZGUgJiA4fDE6IGJlaGF2ZSBsaWtlIHJlcXVpcmVcbiBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4gXHRcdGlmKG1vZGUgJiAxKSB2YWx1ZSA9IF9fd2VicGFja19yZXF1aXJlX18odmFsdWUpO1xuIFx0XHRpZihtb2RlICYgOCkgcmV0dXJuIHZhbHVlO1xuIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuIFx0XHR2YXIgbnMgPSBPYmplY3QuY3JlYXRlKG51bGwpO1xuIFx0XHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIobnMpO1xuIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4gXHRcdGlmKG1vZGUgJiAyICYmIHR5cGVvZiB2YWx1ZSAhPSAnc3RyaW5nJykgZm9yKHZhciBrZXkgaW4gdmFsdWUpIF9fd2VicGFja19yZXF1aXJlX18uZChucywga2V5LCBmdW5jdGlvbihrZXkpIHsgcmV0dXJuIHZhbHVlW2tleV07IH0uYmluZChudWxsLCBrZXkpKTtcbiBcdFx0cmV0dXJuIG5zO1xuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCJcIjtcblxuXG4gXHQvLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbiBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDcpO1xuIiwiKGZ1bmN0aW9uICgkLCByb290LCB1bmRlZmluZWQpIHtcblxuXHQkKGZ1bmN0aW9uICgpIHtcblxuXHRcdCd1c2Ugc3RyaWN0Jztcblx0XHQvLyBET00gcmVhZHksIHRha2UgaXQgYXdheVxuXG4gICAgdmFyIHNjcm9sbEhlaWdodCA9ICQoXCIuc2l0ZS1oZWFkZXJcIikuaGVpZ2h0KCkgKyAkKFwiLnJldW5pb24taGVyb1wiKS5oZWlnaHQoKTtcblx0XHR2YXIgcGVyc2lzdGVudEN0YSA9ICQoJyNwZXJzaXN0ZW50LWN0YScpO1xuXG5cdFx0JCh3aW5kb3cpLm9uKCdzY3JvbGwnLCBmdW5jdGlvbigpe1xuXHRcdCAgdmFyIHNjcm9sbFBvc2l0aW9uID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xuXG5cdFx0ICBpZiAoc2Nyb2xsUG9zaXRpb24gPiBzY3JvbGxIZWlnaHQpIHtcblx0XHQgICAgcGVyc2lzdGVudEN0YS5hZGRDbGFzcygnaXMtLXZpc2libGUnKTtcblx0XHQgIH0gZWxzZSB7XG5cdFx0ICAgIHBlcnNpc3RlbnRDdGEucmVtb3ZlQ2xhc3MoJ2lzLS12aXNpYmxlJyk7XG5cdFx0ICB9XG5cdFx0fSk7XG5cblx0XHQvLyBTZWxlY3QgYWxsIGxpbmtzIHdpdGggaGFzaGVzXG5cdFx0JCgnYVtocmVmKj1cIiNcIl0nKVxuXHRcdCAgLy8gUmVtb3ZlIGxpbmtzIHRoYXQgZG9uJ3QgYWN0dWFsbHkgbGluayB0byBhbnl0aGluZ1xuXHRcdCAgLm5vdCgnW2hyZWY9XCIjXCJdJylcblx0XHQgIC5ub3QoJ1tocmVmPVwiIzBcIl0nKVxuXHRcdCAgLmNsaWNrKGZ1bmN0aW9uKGV2ZW50KSB7XG5cdFx0ICAgIC8vIE9uLXBhZ2UgbGlua3Ncblx0XHQgICAgaWYgKFxuXHRcdCAgICAgIGxvY2F0aW9uLnBhdGhuYW1lLnJlcGxhY2UoL15cXC8vLCAnJykgPT0gdGhpcy5wYXRobmFtZS5yZXBsYWNlKC9eXFwvLywgJycpXG5cdFx0ICAgICAgJiZcblx0XHQgICAgICBsb2NhdGlvbi5ob3N0bmFtZSA9PSB0aGlzLmhvc3RuYW1lXG5cdFx0ICAgICkge1xuXHRcdCAgICAgIC8vIEZpZ3VyZSBvdXQgZWxlbWVudCB0byBzY3JvbGwgdG9cblx0XHQgICAgICB2YXIgdGFyZ2V0ID0gJCh0aGlzLmhhc2gpO1xuXHRcdCAgICAgIHRhcmdldCA9IHRhcmdldC5sZW5ndGggPyB0YXJnZXQgOiAkKCdbbmFtZT0nICsgdGhpcy5oYXNoLnNsaWNlKDEpICsgJ10nKTtcblx0XHQgICAgICAvLyBEb2VzIGEgc2Nyb2xsIHRhcmdldCBleGlzdD9cblx0XHQgICAgICBpZiAodGFyZ2V0Lmxlbmd0aCkge1xuXHRcdCAgICAgICAgLy8gT25seSBwcmV2ZW50IGRlZmF1bHQgaWYgYW5pbWF0aW9uIGlzIGFjdHVhbGx5IGdvbm5hIGhhcHBlblxuXHRcdCAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcblx0XHQgICAgICAgICQoJ2h0bWwsIGJvZHknKS5hbmltYXRlKHtcblx0XHQgICAgICAgICAgc2Nyb2xsVG9wOiB0YXJnZXQub2Zmc2V0KCkudG9wXG5cdFx0ICAgICAgICB9LCAxMDAwLCBmdW5jdGlvbigpIHtcblx0XHQgICAgICAgICAgLy8gQ2FsbGJhY2sgYWZ0ZXIgYW5pbWF0aW9uXG5cdFx0ICAgICAgICAgIC8vIE11c3QgY2hhbmdlIGZvY3VzIVxuXHRcdCAgICAgICAgICB2YXIgJHRhcmdldCA9ICQodGFyZ2V0KTtcblx0XHQgICAgICAgICAgJHRhcmdldC5mb2N1cygpO1xuXHRcdCAgICAgICAgICBpZiAoJHRhcmdldC5pcyhcIjpmb2N1c1wiKSkgeyAvLyBDaGVja2luZyBpZiB0aGUgdGFyZ2V0IHdhcyBmb2N1c2VkXG5cdFx0ICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xuXHRcdCAgICAgICAgICB9IGVsc2Uge1xuXHRcdCAgICAgICAgICAgICR0YXJnZXQuYXR0cigndGFiaW5kZXgnLCctMScpOyAvLyBBZGRpbmcgdGFiaW5kZXggZm9yIGVsZW1lbnRzIG5vdCBmb2N1c2FibGVcblx0XHQgICAgICAgICAgICAkdGFyZ2V0LmZvY3VzKCk7IC8vIFNldCBmb2N1cyBhZ2FpblxuXHRcdCAgICAgICAgICB9O1xuXHRcdCAgICAgICAgfSk7XG5cdFx0ICAgICAgfVxuXHRcdCAgICB9XG5cdFx0ICB9KTtcblxuICB9KTtcblxufSkoalF1ZXJ5LCB0aGlzKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=