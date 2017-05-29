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
	 * @var mixed template data;
	 */
	protected static $temp;

	/**
	 * Register menu
	 *
	 * @param array $array Is array where $key=slug_menu and $value=title_menu
	 *
	 * @return void
	 */
	public static function menu( $array = [] ) {
		if ( count( $array ) ) {
			self::$temp = $array;
			add_action(
				'after_setup_theme', function () {
				register_nav_menus( self::$temp );
			}
			);
			self::$temp = null;
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
	public static function loadPluginTextdomain( $domain, $plugin_rel_path ) {
		self::$temp = [
			'domain'          => $domain,
			'plugin_rel_path' => $plugin_rel_path
		];
		add_action(
			'init', function () {
			load_plugin_textdomain( self::$temp['domain'], false, self::$temp['plugin_rel_path'] );
		}
		);
		self::$temp = null;
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
		self::$temp = [
			'domain' => $domain,
			'path'   => $path
		];
		add_action(
			'init', function () {
			load_theme_textdomain( self::$temp['domain'], self::$temp['path'] );
		}
		);
		self::$temp = null;
	}
}