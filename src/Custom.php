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
	 * @param int    $width       Ширина логотипа
	 * @param int    $height      Высота логотипа
	 * @param bool   $link        Ссылка для логотипа
	 * @param bool   $title       Аттрибут title ссылки
	 */
	public static final function loginLogo( $path_to_img, $width = 84, $height = 84, $link = false, $title = false ) {
		$callback = function () use ( &$path_to_img, &$width, &$height ) {
			echo '<style type="text/css">#login h1 a { background: url(' . $path_to_img . ') no-repeat 0 0 !important; width:' . $width . 'px; height:' . $height . 'px; }</style>';

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