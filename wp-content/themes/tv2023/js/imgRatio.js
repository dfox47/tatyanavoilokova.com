// imgRatio.js [START]
const imgRatio = () => {
	const $img = document.querySelectorAll('.js-img-ratio')

	const windowRatio = window.innerWidth / window.innerHeight
	console.log('windowRatio: ', windowRatio)

	$img.forEach((e) => {
		// Create a new Image object
		const img = new Image()

		img.src = e.src

		// Wait for the image to load
		img.onload = function() {
			// Calculate the aspect ratio
			const aspectRatio = img.width / img.height

			if (aspectRatio > windowRatio) {
				e.dataset.ratio = 'horizontal'

				return
			}

			e.dataset.ratio = 'vertical'
		}
	})
}

imgRatio()

window.addEventListener('resize', function() {
	imgRatio()
})
// imgRatio.js [END]