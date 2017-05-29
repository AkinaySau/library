<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 29.05.2017
 * Time: 17:07
 */

namespace Sau\Lib;


class Plugin {
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
		$callback = function () use ( &$domain, &$plugin_rel_path ) {
			load_plugin_textdomain( $domain, false, $plugin_rel_path );
		};
		Action::init( $callback );
	}
}