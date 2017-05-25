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
			Actions::afterSetupTheme( register_nav_menus( $array ) );
		}
	}
}