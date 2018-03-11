<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 11.03.18
 * Time: 23:29
 */

namespace Sau\Lib;


abstract class Sidebar {

	/**
	 * Название панели виджетов. Название будет видно в админ-панели WordPress. По умолчанию "Боковая колонка 1"
	 * (локализация от Sidebar $i, где $i порядковый номер сайдбара). Значение не должно быть пустым!
	 * @var string
	 */
	static protected $name = 'Sidebar';
	/**
	 * Идентификатор виджета. Строка, в которой не должно быть заглавных букв и пробелов. Значение не должно быть
	 * пустым, если оставить этот параметр пустым, то в режиме разработки (при дебаге) получите заметку типа
	 * E_USER_NOTICE.
	 * @var string
	 */
	static protected $id = 'sidebar';

	/**
	 * Текст описывающий где будет выводиться панель виджетов. Показывается в панели управления виджетами.
	 * @var string
	 */
	static protected $description = '';

	/**
	 * CSS класс, который будет добавлен главному HTML тегу панели виджетов.
	 * @var
	 */
	static protected $class = '';
	/**
	 * HTML код, который будет расположен перед каждым виджетом в панели. Например: <li class = "my-widget">.
	 * Конструкции %1$s и %2$s будут заменены на id и class используемого в сайдбаре виджета.
	 * @var string
	 */
	static protected $before_widget = '<li id="%1$s" class="widget %2$s">';
	/**
	 * HTML код, который будет расположен после каждого виджета в панели. Например: </li>.
	 * @var string
	 */
	static protected $after_widget = '</li>\n';
	/**
	 * HTML код перед заголовком виджета.
	 * @var string
	 */
	static protected $before_title = '<h2 class="widgettitle">';
	/**
	 * HTML код после заголовка виджета.
	 * @var string
	 */
	static protected $after_title = '</h2>\n';

	public function __construct () {
		/** @var static $obj */
		$obj = static::class;
		Action::widgetsInit(function () use ( $obj ) {
			register_sidebar($obj::registerArray());
		});
	}

	public static function init () {
		return new static();
	}

	/**
	 * @return string
	 */
	public static function getName (): string {
		return static::$name;
	}

	/**
	 * @return string
	 */
	public static function getId (): string {
		return static::$id;
	}

	/**
	 * Sidebar register array
	 */
	static public function registerArray () {
		return get_class_vars(static::class);
	}

	/**
	 * Render Sidebar
	 */
	public static function render () {
		dynamic_sidebar(static::getId());
	}
}