// bubbles.js [START]
const bubblesGenerator = (placeTo, interval, bubbleWidth) => {
	if (placeTo || interval || bubbleWidth) return

	const $bubbles  = document.querySelector(placeTo)
	const delay     = interval
	const width     = bubbleWidth

	if (!$bubbles) return

	let bubbleClicks = 0

	// generate bubbles
	const createSmallBubbles = setInterval(() => {
		const bubble    = document.createElement('span')
		const duration  = Math.floor(Math.random() * 5000 + 3000)

		bubble.classList.add('bubble')
		bubble.classList.add('js-bubble')
		bubble.style.animationDuration  = duration + 'ms'
		bubble.style.left               = Math.floor(Math.random() * $bubbles.clientWidth) + 'px'
		bubble.style.width              = Math.floor(Math.random() * width + 5) + 'px'

		$bubbles.append(bubble)

		bubble.addEventListener('click', (e) => {
			e.target.remove()

			bubbleClicks++

			if (bubbleClicks > 1) {
				clearInterval(createSmallBubbles)

				// make bubbles to hole hero block
				bubblesGenerator('.js-hero-bubbles', 200, 110)
			}
		})

		setTimeout(() => {
			bubble.remove()
		}, duration + 1000)
	}, delay)
}

bubblesGenerator('.js-bubbles', 1000, 40)
// bubbles.js [END]