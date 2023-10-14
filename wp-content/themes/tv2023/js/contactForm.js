// contactForm.js [START]
const contactFormCheck = () => {
	const $contactFormSubmit    = document.querySelector('.js-label-submit')
	const $inputs               = document.querySelectorAll('.js-input')
	const $msg                  = document.querySelector('.js-form-msg')
	const $msgClose             = document.querySelector('.js-form-msg-close')

	if (!$contactFormSubmit) return

	$msgClose.addEventListener('click', () => {
		$msg.classList.remove('active')
	})

	$contactFormSubmit.addEventListener('click', (e) => {
		try {
			$inputs.forEach(input => {
				const inputVal = input.value

				// clear all errors
				input.classList.remove('error')
				$msg.classList.remove('active')

				if (inputVal === '' || inputVal == null) {
					e.preventDefault()

					input.classList.add('error')

					$msg.classList.add('active')

					throw 'Break'
				}
			})
		} catch (e) {
			if (e !== 'Break') throw e
		}
	})
}

contactFormCheck()
// contactForm.js [END]