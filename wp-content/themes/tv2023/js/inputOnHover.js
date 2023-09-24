// inputOnHover.js [START]
// add class on label while focused | not empty input
const inputElements = document.querySelectorAll('.js-input')

// Function to add the class when input is focused and not empty
function addClassOnFocus(e) {
	e.target.closest('.js-label').classList.add('focused')
}

// Function to remove the class when input loses focus or is empty
function removeClassOnBlurOrEmpty(e) {
	const $input = e.target

	if ($input.value.trim() === '') {
		$input.closest('.js-label').classList.remove('focused')
	}
}

inputElements.forEach(function(e) {
	e.addEventListener('focus', addClassOnFocus)
	e.addEventListener('blur', removeClassOnBlurOrEmpty)
})
// inputOnHover.js [END]