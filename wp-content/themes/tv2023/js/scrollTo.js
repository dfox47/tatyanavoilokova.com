const scrollTo = document.querySelectorAll('.js-scroll-to')

scrollTo.forEach((e) => {
	e.addEventListener('click', (link) => {
		link.preventDefault()

		const $block = document.getElementById(e.getAttribute('href').replace('#', ''))

		if ($block) {
			window.scrollTo({
				behavior:   'smooth',
				top:        $block.offsetTop - 100
			})
		}
	})
})
