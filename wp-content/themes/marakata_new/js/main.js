"use strict";
var $ = jQuery;

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
				}, 0);

				document.location.hash = '#' + homeId;
			});
		}
	});

	if (hash != '#')
		$('[href="'+ hash +'"]').trigger('click');
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

	//Functions(load)
	$(window).on('load', function(){
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
