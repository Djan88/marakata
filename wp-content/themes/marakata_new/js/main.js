"use strict";
var $ = jQuery;

//Form Stylization
function formStylization(){
	var radio    = 'input[type="radio"]',
			checkbox = 'input[type="checkbox"]';

	$(radio).wrap('<div class="new-radio"></div>').closest('.new-radio').append('<span></span>');
	$(checkbox).wrap('<div class="new-checkbox"></div>').closest('.new-checkbox').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 13 11" enable-background="new 0 0 13 11" xml:space="preserve"><polyline points="0.2,4.6 1,4 5,9 12,0 12.8,0.6 5.8,9.6 5,10.6 4.2,9.6 0.2,4.6 "/></svg>');
	$(checkbox + ':checked').parent('.new-checkbox').addClass('checked');
	$(radio + ':checked').parent('.new-radio').addClass('checked');
	$(checkbox + ':disabled').closest('.checkbox').addClass('disabled');
	$(radio + ':disabled').closest('.radio').addClass('disabled');

	$('body').on('click', function(){
		$(radio).parent('.new-radio').removeClass('checked');
		$(radio + ':checked').parent('.new-radio').addClass('checked');
		$(checkbox).parent('.new-checkbox').removeClass('checked');
		$(checkbox + ':checked').parent('.new-checkbox').addClass('checked');
		$(radio).closest('.radio').removeClass('disabled');
		$(checkbox).closest('.checkbox').removeClass('disabled');
		$(radio + ':disabled').closest('.radio').addClass('disabled');
		$(checkbox + ':disabled').closest('.checkbox').addClass('disabled');
	});

	if($.fn.selectpicker){
		$('select:not(".without-styles")').selectpicker();
	}
}

//Main Menu
function mainMenu(){
	var menu   = $('.main-menu'),
			link   = $('.main-menu a, .go-section'),
			url    = window.location.href,
			hash   = url.substring(url.indexOf('#')),
			homeId = 'home';

	link.on('click', function(e){
		var $this    = $(this),
				id       = $this.attr('href').split('#').pop(),
				duration = 1;

		e.preventDefault();

		if (!$('#' + id).length) {
			console.log('No such section!');
			return false;
		}

		link.removeClass('active');

		animateFinish();

		$('.section.active [data-out-animation]').each(function(){
			var $this = $(this);
			
			if ($this.data('outAnimationDelay')){
				if ($this.data('outAnimationDelay') >= duration) {
					duration = $this.data('outAnimationDelay');
				}
			}
		});

		if (!$this.hasClass('open')) {
			link.removeClass('open');

			menu.find('[href="#'+ id +'"]').addClass('active').addClass('open');

			$('body').find('.preloader').delay(duration + 500).fadeIn(400, function() {
				$('.section').removeClass('active');

				$('#' + id).addClass('active');

				$(this).fadeOut(400);

				setTimeout(function(){
					contentScroll();
					animateStart();
				}, 0);

				document.location.hash = '#' + id;
			});
		} else {
			$('body').find('.preloader').delay(duration + 500).fadeIn(400, function() {
				link.removeClass('open');

				$('.section').removeClass('active');

				$('#' + homeId).addClass('active');

				$(this).fadeOut(400);

				setTimeout(function(){
					contentScroll();
					animateStart();
				}, 0);

				document.location.hash = '#' + homeId;
			});
		}
	});
}

//Animate Start
function animateStart(){
	var activeSection = $('.section.active');

	$('[data-animation]').each(function(){
		var $this     = $(this),
				animation = 'fadeIn',
				delay     = 1;

		if ($this.data('animation')){
			animation = $this.data('animation');
		}

		if ($this.data('animationDelay')){
			delay = $this.data('animationDelay');
		}

		if ($this.closest('.section').hasClass('active')){
			$this.css('animation-delay', delay + 'ms').addClass('animated').addClass(animation);
		}
	});
}

//Animate Finish
function animateFinish(){
	var activeSection = $('.section.active'),
			duration      = 1;

	$('[data-out-animation]').each(function(){
		var $this        = $(this),
				animation    = 'fadeIn',
				outAnimation = 'fadeOut',
				delay        = 1,
				outDelay     = 1;

		if ($this.data('animation')){
			animation = $this.data('animation');
		}

		if ($this.data('outAnimation')){
			outAnimation = $this.data('outAnimation');
		}

		if ($this.data('animationDelay')){
			delay = $this.data('animationDelay');
		}

		if ($this.data('outAnimationDelay')){
			outDelay = $this.data('outAnimationDelay');
		}

		$this.css('animation-delay', delay + 'ms');

		if ($this.closest('.carousel')) {
			var carousel = $this.closest('.carousel'),
					carouselAnimate = 'zoomIn';

			if (carousel.data('carouselAnimation')){
				carouselAnimate = carousel.data('carouselAnimation');
			}

			$this.removeClass(carouselAnimate);
		}

		if ($this.closest('.section').hasClass('active')){
			if (outDelay >= duration) {
				duration = outDelay;
			}

			$this.removeClass(animation).addClass(outAnimation);

			if ($this.data('outAnimationDelay')){
				$this.css('animation-delay', outDelay + 'ms');
			} else {
				$this.css('animation-delay', '1ms');
			}
		} else {
			$this.removeClass(animation).removeClass(outAnimation).removeAttr('style', 'animation-delay');
		}
	});
}




//Slider Background
function backgroundSlider() {
	var slider = $('.background-slider');

	if (slider.length) {
		var autoplayTimeout = 2000,
				animateIn       = 'fadeIn',
				animateOut      = 'fadeOut';

		if (slider.data('animateIn')) {
			animateIn = slider.data('animateIn');
		}

		if (slider.data('animateOut')) {
			animateOut = slider.data('animateOut');
		}

		if (slider.data('timeout')) {
			autoplayTimeout = slider.data('timeout');
		}

		slider.owlCarousel({
			animateIn       : animateIn,
			animateOut      : animateOut,
			items           : 1,
			loop            : true,
			autoplay        : true,
			autoplayTimeout : autoplayTimeout
		});
	}
}

//Content Scroll
function contentScroll(){
	var section = $('.section.active');

	if (section.length && $.fn.mCustomScrollbar) {
		section.each(function (){
			var $this = $(this);

			if (($this.height() - 40) < $this.find('.container').height()) {
				$this.addClass('scroll-content');

				if(!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/)){
					$this.find('.section-content').mCustomScrollbar({
						scrollInertia : 100
					});
				}
			} else {
				$this.removeClass('scroll-content');
			}
		});
	}
}

//Notify My
function notifyMy(){
	var margin = 70;

	if (($('body').height() < 600) || ($('body').width() < 768)) {
		margin = 0;
	}

	$('.notify-my .modal-dialog').css('margin-top', (($('body').height() - $('.notify-my .modal-dialog').height()) / 2) - margin);
}

$(document).ready(function(){
	'use strict';

	var isTouchDevice = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/);

	//Touch device
	if(isTouchDevice){
		$('body').addClass('touch-device');
		$('.background-video').remove();
	}

	//Bootstrap Elements
	$('[data-toggle="tooltip"], .tooltip-link').tooltip();

	$('a[data-toggle=popover]')
	.popover()
	.on('click', function(e){
		e.preventDefault();
	});

	$('.disabled, fieldset[disabled] .selectBox').on('click', function (){
		return false;
	});

	//Functions
	mainMenu();
	backgroundSlider();

	//Functions(load)
	$(window).on('load', function(){
		animateStart();
		contentScroll();

		//Preloader
		$('body').delay(500).addClass('loaded').find('.preloader').fadeOut(400);
	});


	//Retina
	if('devicePixelRatio' in window && window.devicePixelRatio >= 2){
		var imgToReplace = $('img.replace-2x').get();

		for (var i=0,l=imgToReplace.length; i<l; i++){
			var src = imgToReplace[i].src;

			src = src.replace(/\.(png|jpg|gif)+$/i, '@2x.$1');

			imgToReplace[i].src = src;

			$(imgToReplace[i]).on('load', function(){
				$(this).addClass('loaded');
			});
		}
	}
});

//Window Resize
(function(){
	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
			timer = setTimeout(callback, ms);
		};
	})();

	function resizeFunctions(){
		//Functions
		videoBg();
		contentScroll();
		notifyMy();
	}

	if(navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone)/)){
		$(window).on('orientationchange', function(){
			resizeFunctions();
		});
	} else {
		$(window).on('resize', function(){
			delay(function(){
				resizeFunctions();
			}, 500);
		});
	}
}());
