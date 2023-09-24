// product [START]
// product home link
const $popup        = document.querySelector('.js-popup[data-popup="with_content"]')
const $popupInner   = $popup.querySelector('.js-popup-content')

document.querySelectorAll('.js-product-home-more').forEach((link) => {
	link.addEventListener('click', (e) => {
		e.preventDefault()

		const url = link.getAttribute('href')

		if (!$popup || !$popupInner || !url) return

		fetch(url)
			.then(response => {
				// Check if the request was successful (status code 200)
				if (response.status === 200) {
					// Parse the response as text
					return response.text()
				}
				else {
					throw new Error("Failed to fetch content")
				}
			})
			.then(data => {
				const tempDiv = document.createElement('div')
				tempDiv.innerHTML = data

				// show popup
				$popup.classList.add('active')

				$popupInner.innerHTML = ''

				// put content from URL
				$popupInner.appendChild(tempDiv.querySelector('.js-product'))
			})
			.then(() => {
				console.log('create slider')

				let $owlCarouselPopup = $('.js-popup-content').find('.js-owl-carousel')

				if ($owlCarouselPopup.length > 0) {
					$(document).ready(function() {
						$owlCarouselPopup.owlCarousel({
							autoHeight: true,
							dots:       false,
							items:      1,
							loop:       true,
							nav:        true,
							navText:    ['', '']
						})
					})
				}
			})
			.catch(error => {
				console.error(error)
			})
	})
})
// product [END]