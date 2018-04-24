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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 36);
/******/ })
/************************************************************************/
/******/ ({

/***/ 36:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(37);


/***/ }),

/***/ 37:
/***/ (function(module, exports) {

$(document).ready(function () {
  var age = {};

  // For use without cookies
  $('#ageModal').modal('show');
  initAge();

  /*  // check if cookie for validAge exists..
    if (cookie.get('validAge') == 'true') {
      return true;
    } else {
      // doesn't exist so lets make them enter a birthday...
      $('#ageModal').modal('show');
      initAge();
    }*/

  // starts the age verification process
  function initAge() {
    var month = 0;
    var day = 0;
    var year = 0;

    $("#age-submit").on("click", function () {
      age['month'] = $("#verify-month").val();
      age['day'] = $("#verify-day").val();
      age['year'] = $("#verify-year").val();
      checkDate();
    });
  }

  // Check to see if user entered a valid date...
  function checkDate() {
    if (age.month == 'none' || age.day == 'none' || age.year == 'none') {
      // Fade in the error...
      $('#modal-error').css('visibility', 'visible').hide().fadeIn('slow');

      // changes the background color of the select if invalid
      if (age.month == 'none') {
        $("#verify-month").css('background', 'rgba(223,32,44,0.5)');
        // Look for change of value and change background color when valid
        $("#verify-month").on('change', function () {
          if ($("#verify-month").val() == 'none') {
            $("#verify-month").css('background', 'rgba(223,32,44,0.5)');
          } else {
            $("#verify-month").css('background', 'white');
          }
        });
      }

      // changes the background color of the select if invalid
      if (age.day == 'none') {
        $("#verify-day").css('background', 'rgba(223,32,44,0.5)');
        // Look for change of value and change background color when valid
        $("#verify-day").on('change', function () {
          if ($("#verify-day").val() == 'none') {
            $("#verify-day").css('background', 'rgba(223,32,44,0.5)');
          } else {
            $("#verify-day").css('background', 'white');
          }
        });
      }

      // changes the background color of the select if invalid
      if (age.year == 'none') {
        $("#verify-year").css('background', 'rgba(223,32,44,0.5)');
        // Look for change of value and change background color when valid
        $("#verify-year").on('change', function () {
          if ($("#verify-year").val() == 'none') {
            $("#verify-year").css('background', 'rgba(223,32,44,0.5)');
          } else {
            $("#verify-year").css('background', 'white');
          }
        });
      }
    } else {
      oldEnough();
    }
  }

  // Compares age entered with todays date 21 years ago...
  function oldEnough() {
    var ageLimit = moment().subtract(21, 'years').calendar();
    var birthDate = age.month + " " + age.day + " " + age.year;
    var oldEnough = moment(birthDate, "MM DD YYYY").isBefore(ageLimit, 'day');

    if (oldEnough) {
      //cookie.set('validAge', 'true');
      $('#ageModal').modal('hide');
    } else {
      //cookie.set('validAge', 'false');
      console.log("it is false");
    }
  }
});

/***/ })

/******/ });