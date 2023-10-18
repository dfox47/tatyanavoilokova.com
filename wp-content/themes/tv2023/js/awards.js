// awards.js [START]
const $allPopups        = document.querySelectorAll('.js-popup')
const $awardsCarousel   = document.querySelector('.js-awards-carousel')
const $popupImg         = document.querySelector('.js-popup-img')

$awardsCarousel.addEventListener('click', function(e) {
	$allPopups.forEach((popup) => {
		// hide all other popups
		popup.classList.remove('active')

		// show selected popup
		if (popup.dataset.popup === 'img') {
			popup.classList.add('active')

			const $popupImgSrc = e.target.closest('.js-awards-carousel-item').dataset.src

			if ($popupImgSrc == null) return

			$popupImg.innerHTML = '<img class="awards_img js-img-ratio" src="' + $popupImgSrc + '" data-ratio="vertical" alt="">'
		}
	})
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