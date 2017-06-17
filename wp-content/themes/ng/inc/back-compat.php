<?php
/**
 * NG Nicolas Gillespie back compat functionality
 *
 * Prevents NG Nicolas Gillespie from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package WordPress
 * @subpackage NG_NicolasGillespie
 * @since NG Nicolas Gillespie 1.0
 */

/**
 * Prevent switching to NG Nicolas Gillespie on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since NG Nicolas Gillespie 1.0
 */
function NG_NicolasGillespie_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'NG_NicolasGillespie_upgrade_notice' );
}
add_action( 'after_switch_theme', 'NG_NicolasGillespie_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * NG Nicolas Gillespie on WordPress versions prior to 4.1.
 *
 * @since NG Nicolas Gillespie 1.0
 */
function NG_NicolasGillespie_upgrade_notice() {
	$message = sprintf( __( 'NG Nicolas Gillespie requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'NG_NicolasGillespie' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since NG Nicolas Gillespie 1.0
 */
function NG_NicolasGillespie_customize() {
	wp_die( sprintf( __( 'NG Nicolas Gillespie requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'NG_NicolasGillespie' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'NG_NicolasGillespie_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since NG Nicolas Gillespie 1.0
 */
function NG_NicolasGillespie_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'NG Nicolas Gillespie requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'NG_NicolasGillespie' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'NG_NicolasGillespie_preview' );
