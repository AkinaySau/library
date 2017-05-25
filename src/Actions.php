<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:48
 */

namespace Sau\Lib;

//TODO: PHPDoc
class Actions {
	public static function afterSetupTheme( $action ) {
		self::action( 'after_setup_theme', $action );
	}

	public static function init( $action ) {
		self::action( 'init', $action );
	}

	protected static function action( $hook, $action ) {
		add_action( $hook, $action );
	}
}