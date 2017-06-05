<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 05.06.2017
 * Time: 16:55
 */

namespace Sau\Lib;

/**
 * Класс для добавления сообщений
 */
class Notice {

	/**
	 * Ошибка. Белый фон, красная полоска слева
	 *
	 * @param string $text  текст сообщения
	 * @param bool   $close добавить возможность закрыть блок
	 *
	 * @return void
	 */
	public static final function error( $text, $close = false ) {
		$callback = function () use ( &$text, &$close ) {
			$close = ( $close ) ? ' notice is-dismissible' : '';
			self::nt( $text, 'error' . $close );
		};
		Action::adminNotices( $callback );
	}

	/**
	 * Построение сообщения
	 *
	 * @param string $text  текст сообщения
	 * @param string $class классы
	 *
	 * @return void
	 */
	protected static final function nt( $text, $class = 'notice' ) {
		echo '<div class="' . $class . '"><p>' . $text . '</p></div>';
	}

	/**
	 * Для успешных операций. Белый фон, зеленая полоска слева.
	 *
	 * @param string $text  текст сообщения
	 * @param bool   $close добавить возможность закрыть блок
	 *
	 * @return void
	 */
	public static final function updated( $text, $close = false ) {
		$callback = function () use ( &$text, &$close ) {
			$close = ( $close ) ? ' notice is-dismissible' : '';
			self::nt( $text, 'updated' . $close );
		};
		Action::adminNotices( $callback );
	}

	/**
	 * Предупреждение. Белый фон, оранжевая полоска слева.
	 *
	 * @param string $text  текст сообщения
	 * @param bool   $close добавить возможность закрыть блок
	 *
	 * @return void
	 */
	public static final function warning( $text, $close = false ) {
		$callback = function () use ( &$text, &$close ) {
			$close = ( $close ) ? ' is-dismissible' : '';
			self::nt( $text, 'notice notice-warning' . $close );
		};
		Action::adminNotices( $callback );
	}

	/**
	 * Простое сообщение. Белый фон, никакой маркировки.
	 *
	 * @param string $text  текст сообщения
	 * @param bool   $close добавить возможность закрыть блок
	 *
	 * @return void
	 */
	public static final function notice( $text, $close = false ) {
		$callback = function () use ( &$text, &$close ) {
			$close = ( $close ) ? ' notice is-dismissible' : '';
			self::nt( $text );
		};
		Action::adminNotices( $callback );
	}

	/**
	 * Блок с оранжевой полоской слева.
	 * Блок будет расположен перед заголовком и будет иметь css свойство inline-block (а не block).
	 *
	 * @param string $text  текст сообщения
	 * @param bool   $close добавить возможность закрыть блок
	 *
	 * @return void
	 */
	public static final function updateNag( $text, $close = false ) {
		$callback = function () use ( &$text, &$close ) {
			$close = ( $close ) ? ' notice is-dismissible' : '';
			self::nt( $text, 'update-nag' . $close );
		};
		Action::adminNotices( $callback );
	}


}