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
		items:          4,
		loop:           true,
		margin:         20,
		nav:            true,
		navText:        ['', ''],
		responsive:{
			0:   {items: 1},
			400: {items: 2},
			600: {items: 3},
			800: {items: 4}
		}
	})
})



const $contactForm          = document.querySelector('.js-contact-form').querySelector('form')
const $contactFormSubmit    = document.querySelector('.js-label-submit')
const $inputs               = document.querySelectorAll('.js-input')
const $msg                  = document.querySelector('.js-form-msg')
const $msgClose             = document.querySelector('.js-form-msg-close')

$msgClose.addEventListener('click', () => {
	$msg.classList.remove('active')
})

$contactFormSubmit.addEventListener('click', (e) => {
	try {
		$inputs.forEach(input => {
			const inputVal = input.value

			// clear all errors
			input.classList.remove('error')
			$msg.classList.remove('active')

			if (inputVal === '' || inputVal == null) {
				e.preventDefault()

				input.classList.add('error')

				$msg.classList.add('active')

				throw 'Break'
			}
		})
	} catch (e) {
		if (e !== 'Break') throw e
	}
})


// custom.js [END]









