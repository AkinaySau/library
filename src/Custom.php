<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 07.06.2017
 * Time: 14:15
 */

namespace Sau\Lib;


class Custom {

	/**
	 * @param string $path_to_img Путь к изображению логотипа
	 * @param bool   $link Ссылка для логотипа
	 * @param bool   $title
	 */
	public static final function loginLogo( $path_to_img, $link = false, $title = false ) {
		$callback = function () use ( &$path_to_img, &$link, &$title ) {
			echo '<style type="text/css">#login h1 a { background: url(' . get_stylesheet_directory_uri(
				) . '/images/logo.png) no-repeat 0 0 !important; width:187px; height:70px; }</style>';

		};
		Action::loginHead( $callback );
		$callback = function () use ( $link ) {
			return $link;
		};
		Filter::loginHeaderUrl( $callback );
		$callback = function () use ( $title ) {
			return $title;
		};
		Filter::loginHeaderTitle( $callback );
	}

}