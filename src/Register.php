<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:46
 */

namespace Sau\Lib;

class Register {

	/**
	 * Register menu
	 *
	 * @param array $array Is array where $key=slug_menu and $value=title_menu
	 *
	 * @return void
	 */
	public static function menu( $array = [] ) {
		if ( count( $array ) ) {
			add_action(
				'after_setup_theme', function () use ( &$array ) {
				register_nav_menus( $array );
			}
			);
		}
	}

	/**
	 * Register plugin language
	 *
	 * @param string $domain          Unique identifier for retrieving translated strings
	 * @param string $plugin_rel_path Optional. Relative path to WP_PLUGIN_DIR where the .mo file resides. Default false
	 *
	 * @return void
	 */
	//TODO: проверить
	public static function loadPluginTextdomain( $domain, $plugin_rel_path ) {
		add_action(
			'init', function () use ( &$domain, &$plugin_rel_path ) {
			var_dump( self::$temp );
			load_plugin_textdomain( $domain, false, $plugin_rel_path );
		}
		);
	}

	/**
	 * Register plugin language
	 *
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 * @param string $path   Optional. Path to the directory containing the .mo file. Default false.
	 *
	 * @return void
	 */
	public static function loadThemeTextdomain( $domain, $path ) {
		add_action(
			'init', function () use ( &$domain, &$path ) {
			load_theme_textdomain( $domain, $path );
		}
		);
	}
}