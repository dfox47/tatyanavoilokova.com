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
}

heroBg()
// hero.js [END]