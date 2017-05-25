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
			$callback   = function () {
				register_nav_menus( (array) self::$temp );
			};
			Actions::afterSetupTheme( $callback );
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
		self::$temp = [ 'domain' => $domain, 'path' => $plugin_rel_path ];
		$callback   = function () {
			load_plugin_textdomain( self::$temp['domain'], false, self::$temp['path'] );
		};
		Actions::init( $callback );
		self::$temp = null;
	}
}