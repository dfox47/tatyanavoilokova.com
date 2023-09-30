<?php // Get the current site's ID
$current_site_id = get_current_blog_id();

// Get all sites in the Multisite network
$sites = get_sites();

if ($sites) { ?>
	<div class="lang_switch">
		<?php $result = '';

		// Loop through each site in the network
		foreach ($sites as $site) {
			// Get the site's ID
			$site_id = $site->blog_id;

			// Get the site's URL
			$site_url   = str_replace('https://' . $_SERVER['SERVER_NAME'], '', get_site_url($site_id));
			$site_name  = str_replace('/', '', $site_url);

			if ($site_url == '') {
				$site_url = '/';
				$site_name = 'en';
			}

			if ($current_site_id == $site_id) { ?>
				<span class="lang_switch__current"><?= $site_name; ?></span>
			<?php }
			else {
				$result .= '<li class="lang_switch__item"><a href="' . $site_url . '" class="lang_switch__link">' . $site_name . '</a></li>';
			} ?>
		<?php } ?>

		<ul class="lang_switch__list">
			<?= $result; ?>
		</ul>
	</div>
<?php } ?>