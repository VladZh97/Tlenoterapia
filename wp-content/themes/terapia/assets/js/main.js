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
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n\r\n\r\n\r\nconst loader = document.querySelector('.loader__container');\r\nconst html = document.querySelector('html');\r\n\r\n\r\nwindow.addEventListener('load', function() {\r\n  loader.parentElement.removeChild(loader);\r\n  html.style.overflow = 'auto';\r\n})\r\n\r\nconst menuBtn = document.querySelector('.menu-btn');\r\nconst menuTop = document.querySelector('.header__right')\r\nlet menuOpen = false;\r\nmenuBtn.addEventListener('click', () => {\r\n    if(!menuOpen) {\r\n        menuBtn.classList.add('open');\r\n        menuTop.classList.add('active')\r\n        menuOpen = true;\r\n    } else {\r\n        menuBtn.classList.remove('open');\r\n        menuTop.classList.remove('active')\r\n        menuOpen = false;\r\n    }\r\n});\r\n\r\nconst menuBtnBurger = document.querySelector('.menu-btn__burger');\r\n\r\n\r\n\r\n$(\".slide\").owlCarousel({\r\n  loop: true,\r\n  margin: 5,\r\n  nav: true,\r\n  dots: true,\r\n  smartSpeed: 1500,\r\n  autoplay: true,\r\n  autoplaySpeed: 2000,\r\n  autoplayTimeout: 8000,\r\n  responsive: {\r\n    0: {\r\n      items: 1,\r\n    },\r\n  },\r\n\r\n  navText: [\r\n    '<button type=\"button\" class=\"slick-arrow slick-prev\"><i class=\"fas fa-angle-left\"></button>',\r\n    '<button type=\"button\" class=\"slick-arrow slick-next\"><i class=\"fas fa-angle-right\"></button>',\r\n  ],\r\n});\r\n\r\n$(\".news-page__content\").owlCarousel({\r\n  loop: true,\r\n  margin: 15,\r\n  nav: true,\r\n  dots: true,\r\n  smartSpeed: 1500,\r\n  autoplay: true,\r\n  autoplaySpeed: 2000,\r\n  autoplayTimeout: 6000,\r\n  dotsClass: \"news-page__dots\",\r\n  dotClass: \"news-page__dot\",\r\n  smartSpeed: 1000,\r\n  responsive: {\r\n    0:{\r\n      items:1,\r\n  },\r\n  576: {\r\n      items:2\r\n  },\r\n  768:{\r\n      items:3\r\n  },\r\n  992:{\r\n      items:4\r\n  }\r\n  },\r\n\r\n  navText: [\r\n    '<button type=\"button\" class=\"news-page__prew news-page__arrow\"><i class=\"fas fa-angle-left\"></i></button>',\r\n    '<button type=\"button\" class=\"news-page__next news-page__arrow\"><i class=\"fas fa-angle-right\"></i></button>',\r\n  ],\r\n});\r\n\r\n\r\n\r\nif(document.body.classList.contains('page-template-page-contact-php')) {\r\n\r\n  // MAP\r\n  var mapCenter = [20.239666, 50.175713];\r\n  \r\n  \r\n  \r\n  \r\n  mapboxgl.accessToken =\r\n    \"pk.eyJ1IjoidmxhZHpoIiwiYSI6ImNrZzBxcHpoMDB1ZmsydG9iMHE0YnJ6NDYifQ._kSahmQ3wNJverVwR7NxgA\";\r\n  var map = new mapboxgl.Map({\r\n    container: \"map\",\r\n    style: \"mapbox://styles/vladzh/ckg9tw9l02mkz19nwaem18kkd\",\r\n    center: mapCenter,\r\n    zoom: 11,\r\n  });\r\n  \r\n  \r\n  map.scrollZoom.disable();\r\n  map.boxZoom.disable();\r\n  map.dragRotate.disable();\r\n  map.keyboard.disable();\r\n  map.doubleClickZoom.disable();\r\n  map.touchZoomRotate.disable();\r\n  \r\n  var point = document.createElement(\"div\");\r\n  point.className = \"marker\";\r\n  point.innerHTML = '<i class=\"fas fa-map-marker-alt\"></i>';\r\n  point.style.fontSize = \"30px\";\r\n  point.style.color = \"#0054A3\";\r\n  \r\n  var marker = new mapboxgl.Marker(point)\r\n      .setLngLat([20.239666, 50.175713])\r\n      .addTo(map);\r\n  \r\n}\r\n\r\n\r\n$.fn.accordion = function() {\r\n  const trigger = $(this).find('.accordion-trigger');\r\n  const collapse = $(this).find('.accordion-collapse');\r\n\r\n  $(trigger).each(function(){\r\n    $(this).on('click', function(){\r\n      $(this).siblings('.accordion-collapse').slideToggle();\r\n      $(this).toggleClass('accordion-open');\r\n      $(this).parent().siblings('.accordion-item').find('.accordion-trigger').removeClass('accordion-open');\r\n      $(this).parent().siblings('.accordion-item').find('.accordion-collapse').slideUp();\r\n    });\r\n  });\r\n}\r\n\r\n$('.accordion').accordion();\r\n$('.accordion2').accordion();\r\n\r\n\r\n  AOS.init();\r\n\r\nif(document.body.classList.contains('page-template-page-contact')) {\r\n  document.querySelector('.contact__bottom').style.display = 'none';\r\n}\n\n//# sourceURL=webpack:///./resources/js/index.js?");

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/style.scss?");

/***/ })

/******/ });