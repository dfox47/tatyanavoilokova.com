// topmenu.js [START]
document.querySelectorAll('.js-header-menu-toggle').forEach((e) => {
	e.addEventListener('click', () => {
		document.documentElement.classList.toggle('header_menu_active')
	})
})
// topmenu.js [END]