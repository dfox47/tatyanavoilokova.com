// awards.js [START]
const $allPopups        = document.querySelectorAll('.js-popup')
const $awardsCarousel   = document.querySelector('.js-awards-carousel')
const $popupImg         = document.querySelector('.js-popup-img')

$awardsCarousel.addEventListener('click', function(e) {
	console.log('x1')

	if (e.target.classList.contains('js-awards-carousel-item')) {
		console.log('x2')

		$allPopups.forEach((popup) => {
			console.log('x3')

			// hide all other popups
			popup.classList.remove('active')

			// show selected popup
			if (popup.dataset.popup === 'img') {
				console.log('x4')

				popup.classList.add('active')

				const $popupImgSrc = e.target.closest('.js-awards-carousel-item').dataset.src

				if ($popupImgSrc == null) return

				console.log('x5')

				$popupImg.innerHTML = '<img class="awards_img js-img-ratio" src="' + $popupImgSrc + '" data-ratio="vertical" alt="">'
			}
		})
	}
})

jQuery(document).ready(function($) {
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
// awards.js [END]