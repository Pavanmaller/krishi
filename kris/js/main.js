;(function () {

	'use strict';

	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#gtco-offcanvas, .js-gtco-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-gtco-nav-toggle').removeClass('active');

	    	}


	    }
		});

	};


	var offcanvasMenu = function() {

		$('#page').prepend('<div id="gtco-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-gtco-nav-toggle gtco-nav-toggle gtco-nav-white"><i></i></a>');
		//$('#about-class').prepend('<a href="#about?" class="about-mob"><i></i></a>');

		var clone1 = $('.menu-1 > ul').clone();
		$('#gtco-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#gtco-offcanvas').append(clone2);

		$('#gtco-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#gtco-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function(){
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');
		}).mouseleave(function(){

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');
		});


		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-gtco-nav-toggle').removeClass('active');

	    	}
		});
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-gtco-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			//$this.toggleClass('active');
			event.preventDefault();

		});

			$('body').on('click', '.nat-farm', function(event){
					var $this = $(this);


					if ( $('body').hasClass('overflow offcanvas') ) {
						$('body').removeClass('overflow offcanvas');
						location.href="#NaturalFarming";
					} else {
						$('body').addClass('overflow offcanvas');
					}


				});
	};



	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated-fast');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated-fast');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated-fast');
							} else {
								el.addClass('fadeInUp animated-fast');
							}

							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});

				}, 100);

			}

		} , { offset: '85%' } );
	};


	var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

	};


	var testimonialCarousel = function(){

		var owl = $('.owl-carousel-fullwidth');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 0,
			nav: false,
			dots: true,
			smartSpeed: 800,
			autoHeight: true
		});

	};

	var tabs = function() {

		// Auto adjust height
		$('.gtco-tab-content-wrap').css('height', 0);
		var autoHeight = function() {

			setTimeout(function(){

				var tabContentWrap = $('.gtco-tab-content-wrap'),
					tabHeight = $('.gtco-tab-nav').outerHeight(),
					formActiveHeight = $('.tab-content.active').outerHeight(),
					totalHeight = parseInt(tabHeight + formActiveHeight + 90);

					tabContentWrap.css('height', totalHeight );

				$(window).resize(function(){
					var tabContentWrap = $('.gtco-tab-content-wrap'),
						tabHeight = $('.gtco-tab-nav').outerHeight(),
						formActiveHeight = $('.tab-content.active').outerHeight(),
						totalHeight = parseInt(tabHeight + formActiveHeight + 90);

						tabContentWrap.css('height', totalHeight );
				});

			}, 100);

		};

		autoHeight();


		// Click tab menu
		$('.gtco-tab-nav a').on('click', function(event){

			var $this = $(this),
				tab = $this.data('tab');

			$('.tab-content')
				.addClass('animated-fast fadeOutDown');

			$('.gtco-tab-nav li').removeClass('active');

			$this
				.closest('li')
					.addClass('active')

			$this
				.closest('.gtco-tabs')
					.find('.tab-content[data-tab-content="'+tab+'"]')
					.removeClass('animated-fast fadeOutDown')
					.addClass('animated-fast active fadeIn');


			autoHeight();
			event.preventDefault();

		});
	};


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){

			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');

			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});

	};


	// Loading page
	var loaderPage = function() {
		$(".gtco-loader").fadeOut("slow");
	};

	var counter = function() {
		$('.js-counter').countTo({
			 formatter: function (value, options) {
	      return value.toFixed(options.decimals);
	    },
		});
	};

	var counterWayPoint = function() {
		if ($('#gtco-counter').length > 0 ) {
			$('#gtco-counter').waypoint( function( direction ) {

				if( direction === 'down' && !$(this.element).hasClass('animated') ) {
					setTimeout( counter , 400);
					$(this.element).addClass('animated');
				}
			} , { offset: '90%' } );
		}
	};


	$(function(){
		mobileMenuOutsideClick();
		offcanvasMenu();
		burgerMenu();
		contentWayPoint();
		dropdown();
		testimonialCarousel();
		tabs();
		goToTop();
		loaderPage();
		counterWayPoint();
	});
	var makeBSS = function (el, options) {
	var $slideshows = document.querySelectorAll(el), // a collection of all of the slideshow
			$slideshow = {},
			Slideshow = {
					init: function (el, options) {
							this.counter = 0; // to keep track of current slide
							this.el = el; // current slideshow container
							this.$items = el.querySelectorAll('figure'); // a collection of all of the slides, caching for performance
							this.numItems = this.$items.length; // total number of slides
							options = options || {}; // if options object not passed in, then set to empty object
							options.auto = options.auto || false; // if options.auto object not passed in, then set to false
							this.opts = {
									auto: (typeof options.auto === "undefined") ? false : options.auto,
									speed: (typeof options.auto.speed === "undefined") ? 1500 : options.auto.speed,

									fullScreen: (typeof options.fullScreen === "undefined") ? false : options.fullScreen,
									swipe: (typeof options.swipe === "undefined") ? false : options.swipe
							};

							this.$items[0].classList.add('bss-show'); // add show class to first figure
							this.injectControls(el);
							this.addEventListeners(el);
							if (this.opts.auto) {
									this.autoCycle(this.el, this.opts.speed);
							}
							if (this.opts.fullScreen) {
									this.addFullScreen(this.el);
							}
							if (this.opts.swipe) {
									this.addSwipe(this.el);
							}
					},
					showCurrent: function (i) {
							// increment or decrement this.counter depending on whether i === 1 or i === -1
							if (i > 0) {
									this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
							} else {
									this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
							}

							// remove .show from whichever element currently has it
							// http://stackoverflow.com/a/16053538/2006057
							[].forEach.call(this.$items, function (el) {
									el.classList.remove('bss-show');
							});

							// add .show to the one item that's supposed to have it
							this.$items[this.counter].classList.add('bss-show');
					},
					injectControls: function (el) {
					// build and inject prev/next controls
							// first create all the new elements
							var spanPrev = document.createElement("span"),
									spanNext = document.createElement("span"),
									docFrag = document.createDocumentFragment();

							// add classes
							spanPrev.classList.add('bss-prev');
							spanNext.classList.add('bss-next');

							// add contents
							spanPrev.innerHTML = '&laquo;';
							spanNext.innerHTML = '&raquo;';

							// append elements to fragment, then append fragment to DOM
							docFrag.appendChild(spanPrev);
							docFrag.appendChild(spanNext);
							el.appendChild(docFrag);
					},
					addEventListeners: function (el) {
							var that = this;
							el.querySelector('.bss-next').addEventListener('click', function () {
									that.showCurrent(1); // increment & show
							}, false);

							el.querySelector('.bss-prev').addEventListener('click', function () {
									that.showCurrent(-1); // decrement & show
							}, false);

							el.onkeydown = function (e) {
									e = e || window.event;
									if (e.keyCode === 37) {
											that.showCurrent(-1); // decrement & show
									} else if (e.keyCode === 39) {
											that.showCurrent(1); // increment & show
									}
							};
					},
					autoCycle: function (el, speed) {
							var that = this,
									interval = window.setInterval(function () {
											that.showCurrent(1); // increment & show
									}, speed);



					},
					addFullScreen: function(el){
							var that = this,
							fsControl = document.createElement("span");

							fsControl.classList.add('bss-fullscreen');
							el.appendChild(fsControl);
							el.querySelector('.bss-fullscreen').addEventListener('click', function () {
									that.toggleFullScreen(el);
							}, false);
					},
					addSwipe: function(el){
							var that = this,
									ht = new Hammer(el);
							ht.on('swiperight', function(e) {
									that.showCurrent(-1); // decrement & show
							});
							ht.on('swipeleft', function(e) {
									that.showCurrent(1); // increment & show
							});
					},
					toggleFullScreen: function(el){
							// https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Using_full_screen_mode
							if (!document.fullscreenElement &&    // alternative standard method
									!document.mozFullScreenElement && !document.webkitFullscreenElement &&
									!document.msFullscreenElement ) {  // current working methods
									if (document.documentElement.requestFullscreen) {
										el.requestFullscreen();
									} else if (document.documentElement.msRequestFullscreen) {
										el.msRequestFullscreen();
									} else if (document.documentElement.mozRequestFullScreen) {
										el.mozRequestFullScreen();
									} else if (document.documentElement.webkitRequestFullscreen) {
										el.webkitRequestFullscreen(el.ALLOW_KEYBOARD_INPUT);
									}
							} else {
									if (document.exitFullscreen) {
										document.exitFullscreen();
									} else if (document.msExitFullscreen) {
										document.msExitFullscreen();
									} else if (document.mozCancelFullScreen) {
										document.mozCancelFullScreen();
									} else if (document.webkitExitFullscreen) {
										document.webkitExitFullscreen();
									}
							}
					} // end toggleFullScreen

			}; // end Slideshow object

	// make instances of Slideshow as needed
	[].forEach.call($slideshows, function (el) {
			$slideshow = Object.create(Slideshow);
			$slideshow.init(el, options);
	});
	};
	var opts = {
	auto : {
			speed : 4000,

	},
	fullScreen : true,
	swipe : true
	};
	makeBSS('.demo1', opts);


}());
