<?php
/**
 * Plugin Settings form template
 *
 * @package headless-cms
 */

?>

<div class="hcms-settings-wrapper">
	<!--Header-->
	<div class="hcms-settings-header">
		<h2><?php esc_html_e( 'TobenskiEgenkontrol Plugins Settings', 'tobenski' ); ?></h2>
		<p><?php esc_html_e( 'Add the settings for the plugin', 'tobenski' ); ?></p>
	</div>
	<!--Form-->
	<form method="post" id="hcms-settings-form" class="hcms-settings-form" action="options.php">
		<?php
		settings_fields( 'tobenski-egenkontrol-settings-group' );
		do_settings_sections( 'tobenski-egenkontrol-settings-group' );
		$option_val_array = get_option( 'tobenski_egenkontrol_options' );
		
		tobenski_egenkontrol_get_template_part(
			'templates/frontend-site-details-section',
			[
				'option_val_array' => $option_val_array,
			]
		);
		
		// headless_cms_get_template_part(
		// 	'templates/post-preview-section',
		// 	[
		// 		'option_val_array' => $option_val_array,
		// 	]
		// );
		
		// headless_cms_get_template_part(
		// 	'templates/hero-section',
		// 	[
		// 		'option_val_array' => $option_val_array,
		// 	]
		// );

		// headless_cms_get_template_part(
		// 	'templates/search-section',
		// 	[
		// 		'option_val_array' => $option_val_array,
		// 	]
		// );

		// headless_cms_get_template_part(
		// 	'templates/featured-post-section',
		// 	[
		// 		'option_val_array' => $option_val_array,
		// 	]
		// );

		// headless_cms_get_template_part(
		// 	'templates/latest-posts-section',
		// 	[
		// 		'option_val_array' => $option_val_array,
		// 	]
		// );

		?>

		<!--Submit Button-->
		<div class="hcms-save-btn-container"><?php submit_button(); ?></div>
	</form>
</div>
