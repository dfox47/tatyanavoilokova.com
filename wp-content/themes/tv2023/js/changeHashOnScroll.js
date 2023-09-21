document.addEventListener('DOMContentLoaded', function () {
	let timer

	const changeHashOnScroll = () => {
		if (timer) {
			window.clearTimeout(timer)
		}

		timer = window.setTimeout(function() {
			let currentSessionId

			document.querySelectorAll('.js-hash-on-scroll').forEach((e) => {
				if (e.getBoundingClientRect().top < 100) {
					currentSessionId = e.id
				}
			})

			if (currentSessionId) {
				history.pushState(null, null, '#' + currentSessionId)
			}
		}, 300)
	}

	changeHashOnScroll()

	window.addEventListener('scroll', changeHashOnScroll)
})
