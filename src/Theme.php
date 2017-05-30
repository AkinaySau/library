<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:46
 */

namespace Sau\Lib;

class Theme {
	/**
	 * Register theme language
	 *
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 * @param string $path   Optional. Path to the directory containing the .mo file. Default false.
	 *
	 * @return void
	 */
	public static function loadThemeTextdomain( $domain, $path ) {
		$callback = function () use ( &$domain, &$path ) {
			load_theme_textdomain( $domain, $path );
		};
		Action::afterSetupTheme( $callback );
	}

	/**
	 * Added favicon
	 *
	 * @param string $path Path to favicon
	 *
	 * @return void
	 */
	public static function addFavicon( $path ) {

		add_action(
			'wp_head',
			function () use ( &$path ) {
				echo '<link rel="shortcut icon" href="' . $path . '" />';
			}
		);
	}

	/**
	 * Enable thumbnails
	 *
	 * @return void
	 */
	public static function enableThumbnails() {
		add_theme_support( 'post-thumbnails' );
	}
}