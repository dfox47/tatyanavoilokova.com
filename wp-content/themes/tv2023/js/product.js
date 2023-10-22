// product [START]
// product home link
const $popup        = document.querySelector('.js-popup[data-popup="with_content"]')
const $popupInner   = $popup.querySelector('.js-popup-content')

document.querySelectorAll('.js-product-home-more').forEach((link) => {
	link.addEventListener('click', (e) => {
		e.preventDefault()

		const url = link.getAttribute('href')

		if (!$popup || !$popupInner || !url) return

		// html overflow hidden
		document.getElementsByTagName('html')[0].classList.add('popup_active')

		// show loading dots
		$popupInner.innerHTML = '<div class="loading"><span></span></div>'

		// show popup
		$popup.classList.add('active')

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

				$popupInner.innerHTML = ''

				// put content from URL
				$popupInner.appendChild(tempDiv.querySelector('.js-product'))
			})
			.then(() => {
				const $infoError            = document.querySelector('.js-product-info-error')
				const $infoSuccess          = document.querySelector('.js-product-info-success')
				const $inputEmail           = document.querySelector('.js-product-input-email')
				const $inputName            = document.querySelector('.js-product-input-name')
				const $loading              = document.querySelector('.js-product-info-loading')
				const form                  = document.querySelector('.js-product-form')

				form.addEventListener('submit', function (e) {
					e.preventDefault()

					if ($inputEmail.value === '' || $inputName.value === '') {
						$infoError.classList.add('active')

						setTimeout(() => {
							$infoError.classList.remove('active')
						}, 2000)

						return
					}

					$loading.classList.add('active')

					const formData = new FormData(form)

					fetch('https://tatyanavoilokova.com/wp-content/themes/tv2023/template-parts/contact_form.php', {
						method: 'POST',
						body: formData
					})
						.then(response => response.text())
						// success
						.then(data => {
							$loading.classList.remove('active')

							if (data === 'success') {
								$infoSuccess.classList.add('active')
							}
						})
						// error
						.catch(error => {
							$loading.classList.remove('active')

							console.error('Error:', error)
						})
				})



				let $inputElements = document.querySelectorAll('.js-input')

				$inputElements.forEach(function(e) {
					e.addEventListener('focus', addClassOnFocus)
					e.addEventListener('blur', removeClassOnBlurOrEmpty)
				})



				// init carousel [START]
				let $owlCarouselPopup = $('.js-popup-content').find('.js-owl-carousel')

				if ($owlCarouselPopup.length > 0) {
					$(document).ready(function() {
						$owlCarouselPopup.owlCarousel({
							autoHeight:     true,
							dots:           true,
							items:          1,
							loop:           true,
							nav:            true,
							navText:        ['', '']
						})
					})
				}
				// init carousel [END]
			})
			.catch(error => {
				console.error(error)
			})
	})
})
// product [END]