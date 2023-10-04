// custom.js [START]
// for jQuery scripts
$(document).ready(function () {
	// default owl carousel
	$('.js-owl-carousel').owlCarousel({
		autoplay:           true,
		autoplayHoverPause: true,
		autoplayTimeout:    3500,
		items:              1,
		loop:               true,
		nav:                true,
		navText:            ['', '']
	})

	// awards carousel
	$('.js-awards-carousel').owlCarousel({
		// autoplay:           true,
		autoplayHoverPause: true,
		autoplayTimeout:    3500,
		items:              4,
		loop:               true,
		nav:                true,
		navText:            ['', ''],
		responsive:{
			0:{
				items:  1
			},
			400:{
				items:  2
			},
			600:{
				items:  3
			},
			800:{
				items:  4
			}
		}
	})
})
// custom.js [END]