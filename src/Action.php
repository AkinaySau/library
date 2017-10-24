<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:48
 */

namespace Sau\Lib;

use Sau\Lib\Base\BaseAction;

/**
 * Класс описывает хуки
 * Каждый доступный метод класса принимает в себя функцию обратного вызова
 */
class Action extends BaseAction {
	/**
	 * Для хука after_setup_theme
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function afterSetupTheme( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'after_setup_theme', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука login_head
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function loginHead( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'login_head', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука admin_notices
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function adminNotices( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'admin_notices', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука admin_init
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function adminInit( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'admin_init', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука admin_menu
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function adminMenu( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'admin_menu', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука init
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function init( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'init', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука upload_mines
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function uploadMines( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'upload_mines', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука pre_get_posts
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function preGetPosts( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'pre_get_posts', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука wp_enqueue_scripts
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function wpEnqueueScripts( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'wp_enqueue_scripts', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука wp_head
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function wpHead( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'wp_head', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука wp_enqueue_scripts
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function wpFooter( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'wp_footer', $callback, $priority, $accepted_args );
	}

	/**
	 * Для хука parse_request
	 *
	 * @param callable $callback      Функция срабатывающая в момент события
	 * @param int      $priority      Приоритет выполнения функции
	 * @param int      $accepted_args Число аргументов которые принимает функция
	 */
	public static function parseRequest( $callback, $priority = null, $accepted_args = null ) {
		self::action( 'parse_request ', $callback, $priority, $accepted_args );
	}

}