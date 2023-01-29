<?php
/** 
 * TobenskiEgenkontrol custom functions
 * 
 * @package tobenski-egenkontrol
 */

 /**
 * An extension to get_template_part function to allow variables to be passed to the template.
 *
 * @param  string $slug file slug like you use in get_template_part without php extension.
 * @param  array  $variables pass an array of variables you want to use in array keys.
 *
 * @return void
 */
function tobenski_egenkontrol_get_template_part( $slug, $variables = [] ) {

	$template         = sprintf( '%s.php', $slug );
	$located_template = '';

	if ( file_exists( TOBENSKI_EGENKONTROL_PATH . '/' . $template ) ) {
		$located_template = TOBENSKI_EGENKONTROL_PATH . '/' . $template;
	} else {
		$located_template = locate_template( $template, false, false );
	}

	if ( '' === $located_template ) {
		return;
	}
	if ( ! empty( $variables ) && is_array( $variables ) ) {
		extract( $variables, EXTR_SKIP ); // phpcs:ignore -- Used as an exception as there is no better alternative.
	}
	include $located_template; // phpcs:ignore

}