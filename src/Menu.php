<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 29.05.2017
 * Time: 17:22
 */

namespace Sau\Lib;


class Menu {

	/**
	 * Registers navigation menu locations for a theme.
	 *
	 * @param array $array Associative array of menu location identifiers (like a slug) and descriptive text
	 *
	 * @return void
	 */
	public static function registerListMenus( $array = [] ) {
		if ( count( $array ) ) {
			$callback = function () use ( &$array ) {
				register_nav_menus( $array );
			};
			Action::afterSetupTheme( $callback );
		}
	}
}