// hero.js [START]
const $hero = document.querySelector('.js-hero')

$hero.addEventListener('mousemove', e => {
	Object.assign($hero, {
		style: `
		--move-x: ${(e.clientX - window.innerWidth / 2) * -.005}deg;
		--move-y: ${(e.clientY - window.innerHeight / 2) * .01}deg;
		`
	})
})
// hero.js [END]