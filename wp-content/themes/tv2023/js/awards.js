// awards.js [START]
const $allPopups        = document.querySelectorAll('.js-popup')
const $awardsCarousel   = document.querySelector('.js-awards-carousel')
const $popupImg         = document.querySelector('.js-popup-img')

// example of HTML | <button class="js-awards-carousel-item" data-popup="img"></button
$awardsCarousel.addEventListener('click', function(e) {
	if (e.target.classList.contains('js-awards-carousel-img')) {
		$allPopups.forEach((popup) => {
			// hide all other popups
			popup.classList.remove('active')

			// show selected popup
			if (popup.dataset.popup === 'img') {
				popup.classList.add('active')

				const $popupImgToPut = e.target.closest('.js-awards-carousel-item').querySelector('.js-popup-img-put')

				if ($popupImgToPut == null) return

				$popupImg.innerHTML = $popupImgToPut.innerHTML
			}
		})
	}
})
// awards.js [END]