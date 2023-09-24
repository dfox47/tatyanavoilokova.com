<?php // feedback popup
if (shortcode_exists('[contact-form-7 id="63"]')) { ?>
	<div class="popup popup--feedback js-popup" data-popup="feedback">
		<div class="popup__bg js-popup-close"></div>

		<div class="popup__content">
			<div class="popup__close js-popup-close"></div>

			<div class="popup__content_wrap">
				<div class="contacts_form">
					<?= do_shortcode('[contact-form-7 id="63"]'); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<div class="popup popup--content js-popup" data-popup="with_content">
	<div class="popup__bg js-popup-close"></div>

	<div class="popup__content">
		<div class="btn btn__close js-popup-close"></div>

		<div class="popup__content_wrap js-popup-content"></div>
	</div>
</div>