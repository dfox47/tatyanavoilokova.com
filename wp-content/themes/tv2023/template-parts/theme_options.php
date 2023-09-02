<?php // more info https://codex.wordpress.org/Creating_Options_Pages
// theme's custom options
add_action('admin_menu', 'customOptions');

function customOptions() {
	add_menu_page(
		'Настройки темы Tatyana Voilokova 2023',
		'Special options',
		'manage_options',
		'theme-custom-options',
		'customOptionsContent',
		'dashicons-admin-generic',
		100
	);

	add_action('admin_init', 'customOptionsSettings');
}

function customOptionsSettings() {
	register_setting('tv2023-options-admin', 'theme_inst');
	register_setting('tv2023-options-admin', 'theme_phone');
	register_setting('tv2023-options-admin', 'theme_telegram');
	register_setting('tv2023-options-admin', 'theme_whatsapp');
}



function customOptionsContent() { ?>
	<div class="wrap">
		<h1>Настройки темы <strong>Tatyana Voilokova 2023</strong></h1>

		<?php settings_errors(); ?>

		<form method="post" action="options.php">
			<?php settings_fields('tv2023-options-admin'); ?>
			<?php do_settings_sections('tv2023-options-admin'); ?>

			<table class="form-table">
				<!-- Телефон -->
				<tr>
					<th scope="row"><label for="theme_phone">Телефон</label></th>
					<td>
						<input id="theme_phone"
						       name="theme_phone"
						       placeholder="+359(87)670-0150"
						       type="text"
						       value="<?= esc_attr(get_option('theme_phone')); ?>"
						/>
					</td>
				</tr>

				<!-- Instagram -->
				<tr>
					<th scope="row"><label for="theme_inst">Instagram</label></th>
					<td>
						<input id="theme_inst"
						       name="theme_inst"
						       placeholder="tatiana.voil"
						       type="text"
						       value="<?= esc_attr(get_option('theme_inst')); ?>"
						/>
					</td>
				</tr>

				<!-- WhatsApp -->
				<tr>
					<th scope="row"><label for="theme_whatsapp">WhatsApp</label></th>
					<td>
						<input id="theme_whatsapp"
						       name="theme_whatsapp"
						       placeholder="359876700150"
						       type="text"
						       value="<?= esc_attr(get_option('theme_whatsapp')); ?>"
						/>
					</td>
				</tr>

				<!-- Telegram -->
				<tr>
					<th scope="row"><label for="theme_telegram">Telegram</label></th>
					<td>
						<input id="theme_telegram"
						       name="theme_telegram"
						       placeholder="359876700150"
						       type="text"
						       value="<?= esc_attr(get_option('theme_telegram')); ?>"
						/>
					</td>
				</tr>
			</table>

			<?php submit_button(); ?>
		</form>
	</div>
<?php }