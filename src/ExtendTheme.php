<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 29.05.2017
 * Time: 14:50
 */

namespace Sau\Lib;


class ExtendTheme {

	public static function addFavicon( $path ) {

		add_action(
			'wp_head',
			function () use ( &$path ) {
				echo '<link rel="shortcut icon" href="' . $path . '" />';
			}
		);
	}
}