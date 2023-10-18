const imgScroll = () => {
	document.querySelectorAll('.js-img-scroll').forEach((e) => {
		if (window.pageYOffset + window.innerHeight > e.getBoundingClientRect().top && e.getBoundingClientRect().top > 0) {
			e.classList.remove('js-img-scroll')

			// create img element
			let $img            = document.createElement('img')
			let $classList      = e.className

			// copy all classes from span to img
			if ($classList) {
				$classList.split(' ').forEach((c) => {
					$img.classList.add(c)
				})
			}

			if (e.dataset.src) {
				$img.src = e.dataset.src

				// alt text
				$img.alt = e.dataset.title ? e.dataset.title : ''

				// append img
				e.after($img)

				// remove main element (span)
				e.remove()
			}
		}
	})
}

imgScroll()

window.addEventListener('orientationChange', imgScroll)

window.addEventListener('resize', imgScroll)

window.addEventListener('scroll', imgScroll)