<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 25.05.2017
 * Time: 9:46
 */

namespace Sau\Lib;

use function count;
use function implode;

class Theme {
	/**
	 * Register theme language
	 *
	 * @param string $domain Text domain. Unique identifier for retrieving
	 *                       translated strings.
	 * @param string $path   Optional. Path to the directory containing the .mo
	 *                       file. Default false.
	 *
	 * @return void
	 */
	public static function loadThemeTextdomain( $domain, $path ) {
		$callback = function () use ( &$domain, &$path ) {
			load_theme_textdomain( $domain, $path );
		};
		Action::afterSetupTheme( $callback );
	}

	/**
	 * Added favicon
	 *
	 * @param string $path Path to favicon
	 *
	 * @return void
	 */
	public static function addFavicon( $path ) {

		add_action( 'wp_head', function () use ( &$path ) {
			echo '<link rel="icon" href="' . $path . '" />';
			echo '<link rel="shortcut icon" href="' . $path . '" />';
		} );
	}

	/**
	 * Позволяет устанавливать миниатюру посту.
	 * Доступна с версии 2.9.
	 * Вы можете передать второй аргумент функции в виде массива,
	 * в котором указать для каких типов постов разрешить миниатюры
	 *
	 * @param string|array $format Типы постов. Если не указано то будет
	 *                             добавлено ко всем
	 *
	 * @return void
	 */
	public static function addSupportPostThumbnails( $format = '' ) {
		self::addThemeSupport( 'post-thumbnails', $format );
	}

	/**
	 * Функция расширения
	 *
	 * @param string       $feature Название добавляемой возможности.
	 * @param string|array $format  Дополнительные параметры. Для каждой
	 *                              возможности свои. У форматов постов тут
	 *                              указываем форматы, у миниатюр типы постов,
	 *                              где они будут работать и т.д.
	 *
	 * @return void
	 */
	protected static function addThemeSupport( $feature, $format = '' ) {
		$callback = function () use ( &$feature, &$format ) {
			if ( ! empty( $format ) || is_array( $format ) ) {
				add_theme_support( $feature, $format );
			} else {
				add_theme_support( $feature );
			}
		};
		Action::afterSetupTheme( $callback );
	}

	/**
	 * Позволяет указывать формат посту.
	 * Функция была добавлена в версии 3.1.
	 *
	 * @param string|array $format Форматы используйте второй аргумент функции
	 *
	 * @return void
	 */
	public static function addSupportPostFormat( $format = '' ) {
		self::addThemeSupport( 'post-formats', $format );
	}

	/**
	 * Если активировать эту опцию для темы, то в теме не нужно устанавливать
	 * метатег title. Он будет подключен автоматически через хук wp_head.
	 */
	public static function addSupportTitleTag() {
		self::addThemeSupport( 'title-tag' );
	}

	/**
	 * Register extend files
	 *
	 * @param array|object $array Array with information about the location of
	 *                            the files relative to the theme
	 *
	 * @return bool|array True if not error or array of not found files
	 */
	public static function addLib( $array = [] ) {
		$error = [];
		foreach ( $array as $file ) {
			if ( file_exists( $path_to_file = get_stylesheet_directory() . DIRECTORY_SEPARATOR . $file ) ) {
				require $path_to_file;
			} else {
				$error[] = '<li>' . $file . '</li>';
			}
		}

		if ( count( $error ) ) {
			$error = implode( $error );
			$error = '<p>При подключении следующих файлов возникли проблемы: </p><u>' . $error . '</u>';
			Notice::error( $error );
		}

		return true;
	}
}