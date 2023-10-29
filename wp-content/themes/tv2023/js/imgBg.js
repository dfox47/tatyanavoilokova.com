// imgBg [START]
const imgBg = () => {
	document.querySelectorAll('.js-img-bg').forEach((e) => {
		if (window.pageYOffset + window.innerHeight > e.getBoundingClientRect().top && e.getBoundingClientRect().top > 0) {
			e.classList.remove('js-img-bg')
			e.style.backgroundImage = 'url(' + e.dataset.src + ')'
		}
	})
}

imgBg()

window.addEventListener('resize', imgBg)
window.addEventListener('scroll', imgBg)
// imgBg [END]