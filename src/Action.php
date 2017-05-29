<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:48
 */

namespace Sau\Lib;

//TODO: PHPDoc
class Action {
	public static function afterSetupTheme( $callback ) {
		self::action( 'after_setup_theme', $callback );
	}

	protected static function action( $hook, $action ) {
		add_action( $hook, $action );
	}

	public static function init( $callback ) {
		self::action( 'init', $callback );
	}
}