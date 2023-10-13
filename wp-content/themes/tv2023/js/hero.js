// hero.js [START]

const heroBg = () => {
	const $hero = document.querySelector('.js-hero')

	if (!$hero) return

	$hero.addEventListener('mousemove', e => {
		Object.assign($hero, {
			style: `
		--move-x: ${(e.clientX - window.innerWidth / 2) * -.005}deg;
		--move-y: ${(e.clientY - window.innerHeight / 2) * .01}deg;
		`
		})
	})



	// hide all bubbles if hero block NOT in view [START]
	let scrollTimer

	const checkInViewport = () => {
		const $heroBubbles = document.querySelector('.js-hero-bubbles')

		clearTimeout(scrollTimer)

		scrollTimer = setTimeout(() => {
			if ($hero.getBoundingClientRect().bottom < 0) {
				if (!$heroBubbles.classList.contains('active')) return

				// remove fullscreen bubbles
				$heroBubbles.remove()

				// hack to clearTimeout with fullscreen bubbles [START]
				const $heroBubblesNew       = document.createElement('div')
				$heroBubblesNew.className   = 'hero_bubbles js-hero-bubbles'
				$hero.appendChild($heroBubblesNew)
				// hack to clearTimeout with fullscreen bubbles [END]

				bubblesGenerator('.js-bubbles', 1000, 40)
			}
		}, 1000)
	}

	checkInViewport()
	window.addEventListener('orientationChange', checkInViewport)
	window.addEventListener('resize', checkInViewport)
	window.addEventListener('scroll', checkInViewport)
	// hide all bubbles if hero block NOT in view [ENS]
}

heroBg()
// hero.js [END]