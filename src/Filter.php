<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 07.06.2017
 * Time: 14:29
 */

namespace Sau\Lib;


class Filter {

	/**
	 * Заменяет ссылку на логотипе на странице входа (wp-login.php)
	 *
	 * @param callable $callback      Функции, которая будет обрабатывать данные.
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 *
	 * @return bool
	 */
	public static final function loginHeaderUrl( $callback, $priority = 10, $accepted_args = 1 ) {
		return self::filter( 'login_headerurl', $callback, $priority, $accepted_args );
	}

	/**
	 * Прикрепляет указанную PHP функцию к указанному хуку-фильтру.
	 *
	 * @param callable $tag             Название фильтра, для которого будет срабатывать функция определенная в параметре $function_to_add.
	 * @param callable $function_to_add Функции, которая будет срабатывать для указанного в предыдущем параметре фильтра.
	 * @param int      $priority        Приоритет выполнения функции
	 * @param int      $accepted_args   Число аргументов которые принимает функция
	 *
	 * @return boolean true или false, в зависимости от того удалось или нет добавить новый фильтр.
	 */
	protected static final function filter( $tag, $function_to_add, $priority = 10, $accepted_args = 1 ) {
		return add_filter( $tag, $function_to_add, $priority, $accepted_args );
	}

	/**
	 * Заменяет ссылку на логотипе на странице входа (wp-login.php)
	 *
	 * @param callable $callback      Функции, которая будет обрабатывать данные.
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 *
	 * @return bool
	 */
	public static final function loginHeaderTitle( $callback, $priority = 10, $accepted_args = 1 ) {
		return self::filter( 'login_headertitle', $callback, $priority, $accepted_args );

	}
}