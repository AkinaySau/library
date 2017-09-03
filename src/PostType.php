<?php
/**
 * Created for library.
 * User: Sau akinaysau@gmail.ru
 * Date: 03.09.2017
 * Time: 14:22
 */

namespace Sau\Lib;

/**
 * Класс для описания нового типа записей.
 * После создания класаа необходимо определить входные данные и вызвать метод
 * создания типа записи
 *
 * @see https://wp-kama.ru/function/register_post_type
 *
 *      TODO:Дополнить дефолтными значениями

 */
class PostType {
	/**
	 * Имя типа записи помеченное для перевода на другой язык.
	 *
	 * @var string
	 */
	public $label;
	/**
	 * Объект содержащий ярлыки для типа записи
	 *
	 * @var PostLabels
	 */
	public $labels;
	/**
	 * Короткое описание типа записи.
	 *
	 * @var string
	 */
	public $description;
	/**
	 * Определяет является ли тип записи публичным или нет. На основе этого
	 * параметра строятся много других, т.е. это своего рода пред-установка для
	 * следующих параметров:
	 *
	 *  false
	 *      show_ui = false - не показывать пользовательский интерфейс (UI)
	 *      для этого типа записей
	 *
	 *      publicly_queryable = false - запросы относящиеся к этому типу
	 *      записей не будут работать в шаблоне
	 *
	 *      exclude_from_search = true - этот тип записей не будет
	 *      учитываться при поиске по сайту
	 *
	 *      show_in_nav_menus = false - этот тип записей будет спрятан из
	 *      выбора меню навигации
	 *
	 *  true
	 *      show_ui = true
	 *      publicly_queryable = true
	 *      exclude_from_search = false
	 *      show_in_nav_menus = true
	 *
	 * @var boolean
	 */
	public $public;
	/**
	 * @var boolean
	 */
	public $publicly_queryable;
	/**
	 * @var boolean
	 */
	public $exclude_from_search;
	/**
	 * @var boolean
	 */
	public $show_ui;
	/**
	 * @var string|boolean
	 */
	public $show_in_menu;
	/**
	 * @var boolean
	 */
	public $show_in_admin_bar;
	/**
	 * @var boolean
	 */
	public $show_in_nav_menus;
	/**
	 * @var boolean
	 */
	public $show_in_rest;
	/**
	 * @var string
	 */
	public $rest_base;
	/**
	 * @var string
	 */
	public $rest_controller_class;
	/**
	 *Позиция где должно расположится меню нового типа записи:
	 *
	 *      1 — в самом верху меню
	 *      2-3 — под «Консоль»
	 *      4-9 — под «Записи»
	 *      10-14 — под «Медиафайлы»
	 *      15-19 — под «Ссылки»
	 *      20-24 — под «Страницы»
	 *      25-59 — под «Комментарии» (по умолчанию, null)
	 *      60-64 — под «Внешний вид»
	 *      65-69 — под «Плагины»
	 *      70-74 — под «Пользователи»
	 *      75-79 — под «Инструменты»
	 *      80-99 — под «Параметры»
	 *      100+ — под разделителем после «Параметры»
	 *
	 * @var integer
	 */
	public $menu_position = null;
	/**
	 * Ссылка на картинку, которая будет использоваться для этого меню.
	 * С выходом WordPress 3.8 появился новый пакет иконок Dashicons, который
	 * входит в состав ядра WordPress. Это комплект из более 150 векторных
	 * изображений. Чтобы установит одну из иконок, напишите её название в этот
	 * параметр. Например иконка постов, называется так: dashicons-admin-post,
	 * а ссылок dashicons-admin-links
	 *
	 * @var string
	 */
	public $menu_icon = null;
	/**
	 * @var string|array
	 */
	public $capability_type;
	/**
	 * @var array
	 */
	public $capabilities;
	/**
	 * @var boolean
	 */
	public $map_meta_cap;
	/**
	 * Будут ли записи этого типа иметь древовидную структуру (как постоянные
	 * страницы).
	 *
	 *      true - да, будут древовидными
	 *      false - нет, будут связаны с таксономией (категориями)
	 *
	 * @var boolean
	 */
	public $hierarchical;
	/**
	 * Вспомогательные поля на странице создания/редактирования этого типа
	 * записи. Метки для вызова функции add_post_type_support().
	 *        title - блок заголовка;
	 *        editor - блок для ввода контента;
	 *        author - блог выбора автора;
	 *        thumbnail блок выбора миниатюры записи. Нужно также включить
	 *        ддержку в установке темы post-thumbnails;
	 *        excerpt - блок ввода цитаты;
	 *        trackbacks - блок уведомлений;
	 *        custom-fields - блок установки произвольных полей;
	 *        comments - блок комментариев;
	 *        revisions - блок ревизий (не отображается пока нет ревизий);
	 *        page-attributes - блок атрибутов постоянных страниц (шаблон и
	 *        древовидная связь записей, древовидность должна быть включена).
	 *        post-formats – блок форматов записи, если они включены в теме.
	 *
	 * @var array
	 */
	public $supports;
	/**
	 * @var string
	 */
	public $register_meta_box_cb;
	/**
	 * @var array
	 */
	public $taxonomies;
	/**
	 * Массив зарегистрированных таксономий, которые будут связанны с этим
	 * типом записей, например: category или post_tag.
	 *
	 *      TODO Пока нет таксономий
	 *      Связать таксономии с записью можно позднее через функцию
	 *      register_taxonomy_for_object_type().
	 *      Таксономии нужно регистрировать с помощью функции
	 *      register_taxonomy().
	 *
	 * @var string
	 */
	public $permalink_epmask;
	/**
	 * @var string|boolean
	 */
	public $has_archive;
	/**
	 * @var array|boolean
	 */
	public $rewrite;
	/**
	 * Ставим false, чтобы убрать возможность запросов или устанавливаем
	 * название запроса для этого типа записей.
	 *
	 * @var string|boolean
	 */
	public $query_var;
	/**
	 * @var boolean
	 */
	public $can_export;
	/**
	 * @var boolean
	 */
	public $delete_with_user;
	/**
	 * @var boolean
	 */
	public $_builtin;
	/**
	 * @var string
	 */
	public $_edit_link;
	/**
	 * Название типа записи (максимум 20 символов). Может содержать только
	 * строчные символы, числа, _ или -: a-z0-9_-
	 *
	 * @var string
	 */
	private $post_type;

	public function __construct( $post_type, PostLabels $labels ) {
		$this->post_type = $post_type;
		$this->labels    = $labels->getLabels();
	}

	public function register() {
		$attr = get_object_vars( $this );
		foreach ( $attr as $key => $value ) {
			if ( is_null( $value ) ) {
				unset( $attr[ $key ] );
			}
		}
		$callback = function () use ( $attr ) {
			register_post_type( $this->post_type, $attr );
		};
		Action::init( $callback );
	}

}