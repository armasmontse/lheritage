/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
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
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(324);
	
	var _scrollit = __webpack_require__(325);
	
	var _scrollit2 = _interopRequireDefault(_scrollit);
	
	var _menu = __webpack_require__(326);
	
	var _menu2 = _interopRequireDefault(_menu);
	
	__webpack_require__(327);
	
	var _logoScroll = __webpack_require__(328);
	
	var _logoScroll2 = _interopRequireDefault(_logoScroll);
	
	var _modal = __webpack_require__(329);
	
	var _modal2 = _interopRequireDefault(_modal);
	
	function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
	
	(0, _constants.$)(document).ready(function () {
	
	    (0, _scrollit2.default)();
	    (0, _menu2.default)();
	    (0, _modal2.default)();
	    new WOW().init();
	    // const scrollify = $('.scrollify');
	
	    (0, _constants.$)('.gallery__slick-slide').slick({
	        dots: false,
	        infinite: true,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        arrows: true
	    });
	
	    var gallery = (0, _constants.$)('.gallery');
	
	    function fullpageScroll(breakSm) {
	        if (!breakSm.matches) {
	            //search movil
	            var scrollify = (0, _constants.$)('.scrollify');
	            if (scrollify.length) {
	
	                _constants.$.scrollify({
	                    section: ".section-scroll",
	                    interstitialSection: "footer",
	                    sectionName: false
	                    // scrollSpeed:    2000,
	                });
	            }
	            (0, _logoScroll2.default)();
	
	            //Parallax with ScrollMagic
	            var controller = new ScrollMagic.Controller({ addIndicators: false });
	
	            // create a scene
	            (0, _constants.$)('.menu_parallax_JS').each(function () {
	
	                var timelineMaxParallax = new TimelineMax();
	
	                (0, _constants.$)(this).find('.y-scroll_JS').each(function () {
	
	                    var transition = (0, _constants.$)(this).data('transition') + '%';
	                    var duration = (0, _constants.$)(this).data('duration') ? true : 0;
	                    var position = (0, _constants.$)(this).data('time') ? true : 0;
	
	                    timelineMaxParallax.from(this, duration, {
	                        y: transition,
	                        // ease: Back.easeIn.config(1)
	                        // ease: Circ.easeOut,
	                        ease: Sine.easeOut
	                    }, position);
	                });
	
	                var slideParallaxScene = new ScrollMagic.Scene({
	                    //triggerElement: this,
	                    offset: 300,
	                    triggerHook: 1.3,
	                    duration: '100%'
	                })
	                // .setClassToggle(this, 'in-viewport_JS')
	                .setTween(timelineMaxParallax).addTo(controller);
	            });
	        }
	    }
	
	    var breakSm = window.matchMedia("(max-width: 768px)");
	    fullpageScroll(breakSm);
	    breakSm.addListener(fullpageScroll);
	});
	
	_constants.w.scroll(function () {
	    (0, _logoScroll2.default)();
	});

/***/ }),

/***/ 324:
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),

/***/ 325:
/***/ (function(module, exports) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	    //Scrollit
	    $('a[href*="#"]:not([href="#"])').click(function (e) {
	        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	            e.preventDefault();
	            var target = $(this.hash);
	            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	            if (target.length) {
	                $('html, body').animate({
	                    scrollTop: target.offset().top - 0
	                }, 1000);
	                return false;
	            }
	        }
	    });
	};

/***/ }),

/***/ 326:
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	
	    var btnAbrir = $(".header__btn_JS");
	
	    var menu = $(".header__menu__JS");
	
	    var open = false;
	
	    btnAbrir.on("click", function () {
	
	        // Si está abierto hay que cerrarlo.
	        if (open == false) {
	            menu.addClass('view');
	            btnAbrir.addClass('close');
	            open = true;
	        } else {
	            menu.removeClass('view');
	            btnAbrir.removeClass('close');
	            open = false;
	        }
	    });
	};
	
	window.$ = jQuery;
	var w = $(window);

/***/ }),

/***/ 327:
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(324);
	
	_constants.w.load(function () {
	
	     (0, _constants.$)('.slick-slide').slick({
	          dots: true
	     });
	});

/***/ }),

/***/ 328:
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function (scope) {
	
	    var logo = (0, _constants.$)('.header__logo');
	    var position;
	    var opacity;
	
	    if (_constants.w.width() > 600) {
	        position = Math.max(-66, 7 - 0.16 * _constants.w.scrollTop()) + 'px';
	        opacity = Math.max(-0.01, 1 - 0.019 * _constants.w.scrollTop());
	    }
	
	    logo.css({
	        'top': position
	    });
	
	    logo.css({
	        'opacity': opacity
	    });
	};
	
	var _constants = __webpack_require__(324);

/***/ }),

/***/ 329:
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	    value: true
	});
	
	exports.default = function () {
	
	    var btnAbrir = $("#reservaciones_JS");
	
	    var btnCerrar = $("#reservaciones-close_JS");
	
	    var menu = $(".home__modal_JS");
	
	    var open = false;
	
	    btnAbrir.on("click", function () {
	
	        console.log('SE ABRE MODAL');
	
	        menu.addClass('view');
	        // menu.removeClass('view');
	    });
	
	    btnCerrar.on("click", function () {
	
	        console.log('SE CIERRA MODAL');
	
	        menu.removeClass('view');
	        // menu.removeClass('view');
	    });
	};
	
	window.$ = jQuery;
	var w = $(window);

/***/ })

/******/ });
//# sourceMappingURL=functions.js.map