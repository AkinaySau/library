<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 01.06.2017
 * Time: 12:19
 */

namespace Sau\Lib;


use const false;
use function is_string;

class Media {
	/**
	 * Создание нового типоразмера картинки
	 *
	 * @param string      $name          Название нового размера картинок.
	 * @param integer     $width         Ширина миниатюры (в пикселях).
	 * @param integer     $height        Высота миниатюры (в пикселях).
	 * @param bool        $crop          Как создавать миниатюру?
	 *                                   <ul>
	 *                                   <li>
	 *                                   false - мягкое кадрирование: миниатюра создается по одной из подходящих сторон:
	 *                                   указанной ширине или высоте.
	 *                                   Итоговая картинка не будет точно совпадать указанным размерам;
	 *                                   </li>
	 *                                   <li>
	 *                                   true - жесткое кадрирование: миниатюра создается точно по указанным размерам.
	 *                                   Подбирается наиболее подходящая сторона, картинка уменьшается по ней, а у
	 *                                   противоположной стороны лишняя часть, не подходящая по пропорциям обрезается;</li>
	 *                                   <li>
	 *                                   array( координата_X, координата_Y ) - указание позиции кадрирования,
	 *                                   т.е. если указать массив (array( 'right', 'top')), то изображение будет кадрированно
	 *                                   с указанных позиций.
	 *                                   </li>
	 *                                   </ul>
	 * @param bool|string $media_manager Название в медиа-менеджере
	 */
	public static function addThumbnailSize( $name, $width, $height, $crop = false, $media_manager = false ) {
		add_image_size( $name, $width, $height, $crop );
		if ( $media_manager && is_string( $media_manager ) ) {
			$callback = function ( $sizes ) use ( $name, $media_manager ) {
				return array_merge( $sizes, [ $name => $media_manager ] );
			};
			Filter::imageSizeNamesChoose( $callback );
		}
	}
}