"use strict";
var $ = jQuery;



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
	formStylization();
	mainMenu();
	mapBox();
	youtubeVideoBg();
	sendEmail();
	contactForm();
	backgroundSlider();

	//Functions(load)
	$(window).on('load', function(){
		animateStart();
		carousels();
		videoBg();
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

	//Notify My
	$('.notify-my').on('shown.bs.modal', function () {
		notifyMy();
	});

	//Vimeo Start/Stop
	$('.modal').on('shown.bs.modal', function (e) {
		var video = $(this).find('.vimeo-video iframe');

		if (video.length && video.closest('.vimeo-video').data('autoplay')) {
			var player = $f(video[0]);

			player.api('play');
		}
	});

	$('.modal').on('hidden.bs.modal', function (e) {
		var video = $(this).find('.vimeo-video iframe');

		if (video.length) {
			var player = $f(video[0]);

			player.api('pause');
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
