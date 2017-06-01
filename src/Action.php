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
	 * @param callable $callback Функция срабатывающая в момент события
	 */
	public static function afterSetupTheme( $callback ) {
		self::action( 'after_setup_theme', $callback );
	}

	/**
	 * Выполнение хука
	 *
	 * @param callable $hook   Хук
	 * @param callable $action Функция обратного ызова
	 */
	protected static function action( $hook, $action ) {
		add_action( $hook, $action );
	}

	/**
	 * Для хука init
	 *
	 * @param callable $callback Функция срабатывающая в момент события
	 */
	public static function init( $callback ) {
		self::action( 'init', $callback );
	}

	/**
	 * Для хука upload_mines
	 *
	 * @param callable $callback Функция срабатывающая в момент события
	 */
	public static function uploadMines( $callback ) {
		self::action( 'upload_mines', $callback );
	}

	/**
	 * Для хука pre_get_posts
	 *
	 * @param callable $callback Функция срабатывающая в момент события
	 */
	public static function preGetPosts( $callback ) {
		self::action( 'pre_get_posts', $callback );
	}

	/**
	 * Для хука wp_enqueue_scripts
	 *
	 * @param callable $callback Функция срабатывающая в момент события
	 */
	public static function wpEnqueueScripts( $callback ) {
		self::action( 'wp_enqueue_scripts', $callback );
	}
}