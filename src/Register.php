<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:46
 */

namespace Sau\Lib;

class Register {
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
}