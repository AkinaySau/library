<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:48
 */

namespace Sau\Lib;

/**
 * Класс описывает фильтры
 * Каждый доступный метод класса принимает в себя функцию обратного вызова
 */
class Filter {
	/**
	 * Для фильтра image_size_names_choose
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 *
	 * @return bool
	 */
	public static function imageSizeNamesChoose( $callback, $priority = 10, $accepted_args = 1 ) {
		return self::action( 'image_size_names_choose', $callback, $priority, $accepted_args );
	}

	/**
	 * Применение фильтра
	 *
	 * @param callable $filter        Фильтр
	 * @param callable $action        Функция обратного ызова
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 *
	 * @return boolean
	 */
	protected static function action( $filter, $action, $priority, $accepted_args ) {
		return add_filter( $filter, $action, (int) $priority, (int) $accepted_args );
	}
}