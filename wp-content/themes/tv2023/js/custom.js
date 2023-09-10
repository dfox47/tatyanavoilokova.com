// custom.js [START]
// for jQuery scripts
$(document).ready(function () {
	//some code here
})

const $hero = document.querySelector('.js-hero')

$hero.addEventListener('mousemove', e => {
	Object.assign($hero, {
		style: `
		--move-x: ${(e.clientX - window.innerWidth / 2) * -.005}deg;
		--move-y: ${(e.clientY - window.innerHeight / 2) * .01}deg;
		`
	})
})

// custom.js [END]