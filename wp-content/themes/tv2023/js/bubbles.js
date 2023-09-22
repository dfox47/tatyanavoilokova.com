// bubbles.js [START]
const bubblesGenerator = () => {
	const $bubbles = document.querySelector('.js-bubbles')

	if (!$bubbles) return

	// generate bubbles
	setInterval(() => {
		const bubble    = document.createElement('span')
		const duration  = Math.floor(Math.random() * 5000 + 3000)

		bubble.classList.add('bubble')
		bubble.classList.add('js-bubble')
		bubble.style.animationDuration  = duration + 'ms'
		bubble.style.left               = Math.floor(Math.random() * $bubbles.clientWidth) + 'px'
		bubble.style.width              = Math.floor(Math.random() * 40 + 5) + 'px'

		$bubbles.append(bubble)

		bubble.addEventListener('click', () => {
			bubble.remove()
		})

		setTimeout(() => {
			bubble.remove()
		}, duration + 1000)
	}, 1000)
}

bubblesGenerator()
// bubbles.js [END]