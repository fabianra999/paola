'use strict';

/*anima vinculo a con class aAnimate con id dentro de body o etc*/
function linkAnimate() {
	$('body').on('click', 'a.aAnimate', function () {
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 800);
		return false;
	});
}

/*hacer scroll horizontal con btn rueda mouse solo en div class container-horizontal*/
function scrollHorizontal() {
	$('.container-horizontal').on('mousewheel', function (event, delta) {
		this.scrollLeft -= delta * 30;
		event.preventDefault();
	});
}

function slideToggle() {

	// Set the effect type (slide slow fast swing linear)
	var effect = 'slide';

	// Set the options for the effect type chosen (Right Left Up Down)
	var options = { direction: "down" };

	// Set the duration (default: 400 millisecond	s)
	var duration = 500;

	$('#bannerfullscreen').toggle(effect, options, duration);
}

//  detecta browser movil
function mobileDetecting() {
	var bodyTag = document.getElementsByTagName("body")[0];

	var isMobile = {
		Android: function Android() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function BlackBerry() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function iOS() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		iPhone: function iPhone() {
			return navigator.userAgent.match(/iPhone|iPod/i);
		},
		ipad: function ipad() {
			return navigator.userAgent.match(/iPad/i);
		},
		Opera: function Opera() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function Windows() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function any() {
			return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
		}
	};

	// Es movil
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$('body').addClass('mobile');
	}

	// Es ios
	if (isMobile.iOS()) {
		$('body').addClass('iOS');
	}

	// tipo de movil
	if (isMobile.Android()) {
		$('body').addClass('Android');
	} else if (isMobile.BlackBerry()) {
		$('body').addClass('BlackBerry');
	} else if (isMobile.ipad()) {
		$('body').addClass('ipad');
	} else if (isMobile.iPhone()) {
		$('body').addClass('iPhone');
	} else if (isMobile.Opera()) {
		$('body').addClass('Opera');
	} else if (isMobile.Windows()) {
		$('body').addClass('Windows');
	}
}

//   detect browser version
function detectBrowser() {
	var BrowserDetect = {
		init: function init() {
			this.browser = this.searchString(this.dataBrowser) || "Other";
			this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
		},
		searchString: function searchString(data) {
			for (var i = 0; i < data.length; i++) {
				var dataString = data[i].string;
				this.versionSearchString = data[i].subString;

				if (dataString.indexOf(data[i].subString) !== -1) {
					return data[i].identity;
				}
			}
		},
		searchVersion: function searchVersion(dataString) {
			var index = dataString.indexOf(this.versionSearchString);
			if (index === -1) {
				return;
			}

			var rv = dataString.indexOf("rv:");
			if (this.versionSearchString === "Trident" && rv !== -1) {
				return parseFloat(dataString.substring(rv + 3));
			} else {
				return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
			}
		},

		dataBrowser: [{ string: navigator.userAgent, subString: "Edge", identity: "MS Edge" }, { string: navigator.userAgent, subString: "MSIE", identity: "Explorer" }, { string: navigator.userAgent, subString: "Trident", identity: "Explorer" }, { string: navigator.userAgent, subString: "Firefox", identity: "Firefox" }, { string: navigator.userAgent, subString: "Opera", identity: "Opera" }, { string: navigator.userAgent, subString: "OPR", identity: "Opera" }, { string: navigator.userAgent, subString: "Chrome", identity: "Chrome" }, { string: navigator.userAgent, subString: "Safari", identity: "Safari" }]
	};

	BrowserDetect.init();

	//body add class
	var bodyTag = document.getElementsByTagName("body")[0];
	//console.log( BrowserDetect.browser + BrowserDetect.version);
	//bodyTag.className += (BrowserDetect.browser + BrowserDetect.version);
	$('body').addClass(BrowserDetect.browser + BrowserDetect.version);
	$('body').addClass(BrowserDetect.browser);
}

//  viewportSize
function viewportSize() {
	var ventanaAncho = $(window).width();
	var ventanaAlto = $(window).height();

	var altoViewpor = ventanaAlto + 'px';
	var anchoViewpor = ventanaAncho + 'px';

	if (ventanaAncho <= 480) {
		//console.log('movil :', ventanaAncho);

	} else if (ventanaAncho > 480 && ventanaAncho <= 768) {
		//console.log('tabla :', ventanaAncho);

	} else if (ventanaAncho > 768) {
		//console.log('desktop :', ventanaAncho);
	}
}

/* llamados
==============================================================================*/
/*$( window ).resize(function() {
	detectBrowser () ;
	mobileDetecting () ;
	viewportSize () ;
});*/

/*(function  () {
	detectBrowser () ;
	mobileDetecting () ;
	viewportSize () ;

	if ($('body').is('.mobile')){ //si tine la clase

	}

})();*/

'use strict';

/*------- mobile styles --------*/
if (window.matchMedia("(max-width: 480px)").matches) {}

/*------- Tablet styles --------*/
if (window.matchMedia("screen and (min-width: 481px) and (max-width: 768px)").matches) {}
/*------- Desktop styles --------*/
if (window.matchMedia("(min-width: 769px)").matches) {}
//Altura fotooo
$(document).ready(function () {
	var alturaHeader = $('.header-links').height() * 1 + 'px';
	//$('.skillsView__header').css({'margin-top': alturaHeader});

	$('.slickProjects').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		autoplay: true,
		arrows: true,
		autoplaySpeed: 2000,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
		}, {
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		}]
	});
});

$(document).ready(function () {

	// typing animation
	(function ($) {
		$.fn.writeText = function (content) {
			var contentArray = content.split(""),
			    current = 0,
			    elem = this;
			setInterval(function () {
				if (current < contentArray.length) {
					elem.text(elem.text() + contentArray[current++]);
				}
			}, 80);
		};
	})(jQuery);

	// input text for typing animation
	$("#holder").writeText("Desarrollo SQL + Consultor IT + ERP Novasoft");

	// initialize wow.js
	new WOW().init();

	// Push the body and the nav over by 285px over
	var main = function main() {
		$('.fa-bars').click(function () {
			$('.nav-screen').animate({
				right: "0px"
			}, 200);

			$('body').animate({
				right: "285px"
			}, 200);
		});

		// Then push them back */
		$('.fa-times').click(function () {
			$('.nav-screen').animate({
				right: "-285px"
			}, 200);

			$('body').animate({
				right: "0px"
			}, 200);
		});

		$('.nav-links a').click(function () {
			$('.nav-screen').animate({
				right: "-285px"
			}, 500);

			$('body').animate({
				right: "0px"
			}, 500);
		});
	};

	$(document).ready(main);

	// initiate full page scroll


	// move section down one
	$(document).on('click', '#moveDown', function () {
		$.fn.fullpage.moveSectionDown();
	});

	// fullpage.js link navigation
	$(document).on('click', '#skills', function () {
		$.fn.fullpage.moveTo(2);
	});

	$(document).on('click', '#projects', function () {
		$.fn.fullpage.moveTo(3);
	});

	$(document).on('click', '#contact', function () {
		$.fn.fullpage.moveTo(4);
	});

	// smooth scrolling
	$(function () {
		$('a[href*=#]:not([href=#])').click(function () {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 700);
					return false;
				}
			}
		});
	});

	//ajax form
	$(function () {

		// Get the form.
		var form = $('#ajax-contact');

		// Get the messages div.
		var formMessages = $('#form-messages');

		// Set up an event listener for the contact form.
		$(form).submit(function (e) {
			// Stop the browser from submitting the form.
			e.preventDefault();

			// Serialize the form data.
			var formData = $(form).serialize();

			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			}).done(function (response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#name').val('');
				$('#email').val('');
				$('#message').val('');
			}).fail(function (data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});
		});
	});
});
