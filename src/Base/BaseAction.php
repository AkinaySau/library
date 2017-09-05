<?php
/**
 * Created for library.
 * User: AkinaySau akinaysau@gmail.ru
 * Date: 05.09.2017
 * Time: 14:53
 */

namespace Sau\Lib\Base;


abstract class BaseAction {

	/**
	 * Приоритет выполнения хука
	 *
	 * @var int
	 */
	const PRIORITY = 10;
	/**
	 * Кол-во принимаемых параметров (дефолтное значение)
	 *
	 * @var int
	 */
	const ACCEPTED_ARGS = 1;

	/**
	 * Выполнение хука
	 *
	 * @param callable $hook          Хук
	 * @param callable $action        Функция обратного ызова
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public final static function action( $hook, $action, $priority = null, $accepted_args = null ) {
		$priority      = $priority ?? self::PRIORITY;
		$accepted_args = $accepted_args ?? self::ACCEPTED_ARGS;
		add_action( $hook, $action, (int) $priority, (int) $accepted_args );
	}
}