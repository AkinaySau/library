<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:48
 */

namespace Sau\Lib;

/**
 * Класс описывает хуки
 * Каждый доступный метод класса принимает в себя функцию обратного вызова
 */
class Action {
	/**
	 * Для хука after_setup_theme
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function afterSetupTheme( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'after_setup_theme', $callback, $priority, $accepted_args );
	}
	/**
	 * Для хука admin_notices
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function adminNotices( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'admin_notices', $callback, $priority, $accepted_args );
	}

	/**
	 * Выполнение хука
	 *
	 * @param callable $hook          Хук
	 * @param callable $action        Функция обратного ызова
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	protected static function action( $hook, $action, $priority, $accepted_args ) {
		add_action( $hook, $action, (int) $priority, (int) $accepted_args );
	}

	/**
	 * Для хука init
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function init( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'init', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука upload_mines
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function uploadMines( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'upload_mines', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука pre_get_posts
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function preGetPosts( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'pre_get_posts', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука wp_enqueue_scripts
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function wpEnqueueScripts( $callback, $priority = 10, $accepted_args = 1 ) {
		self::action( 'wp_enqueue_scripts', $callback, $priority, $accepted_args );
	}
}