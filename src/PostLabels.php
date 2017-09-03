<?php
/**
 * Created for library.
 * User: Sau akinaysau@gmail.ru
 * Date: 03.09.2017
 * Time: 13:57
 */

namespace Sau\Lib;


class PostLabels {
	/**
	 * основное название для типа записи, обычно во множественном числе.
	 */
	public $name = null;
	/**
	 * название для одной записи этого типа.
	 */
	public $singular_name = null;
	/**
	 * текст для добавления новой записи, как "добавить новый" у постов в
	 * админ-панели. Если нужно использовать перевод названия, вписывайте
	 * подобным образом: _x('Add New', 'product');
	 */
	public $add_new = null;
	/**
	 * текст заголовка у вновь создаваемой записи в админ-панели. Как "Добавить
	 * новый пост" у постов.
	 */
	public $add_new_item = null;
	/**
	 * текст для редактирования типа записи. По умолчанию: редактировать
	 * пост/редактировать страницу.
	 */
	public $edit_item = null;
	/**
	 * текст новой записи. По умолчанию: "Новый пост"
	 */
	public $new_item = null;
	/**
	 * текст для просмотра записи этого типа. По умолчанию: "Посмотреть
	 * пост"/"Посмотреть страницу".
	 */
	public $view_item = null;
	/**
	 * текст для поиска по этим типам записи. По умолчанию "Найти пост"/"найти
	 * страницу".
	 */
	public $search_items = null;
	/**
	 * текст, если в результате поиска ничего не было найдено. По умолчанию:
	 * "Постов не было найдено"/"Страниц не было найдено".
	 */
	public $not_found = null;
	/**
	 * текст, если не было найдено в корзине. По умолчанию "Постов не было
	 * найдено в корзине"/"Страниц не было найдено в корзине".
	 */
	public $not_found_in_trash = null;
	/**
	 * текст для родительских типов. Этот параметр не используется для не
	 * древовидных типов записей. По умолчанию "Родительская страница".
	 */
	public $parent_item_colon = null;
	/**
	 * Все записи. По умолчанию равен menu_name
	 */
	public $all_items = null;
	/**
	 * Архивы записей. По умолчанию равен all_items
	 */
	public $archives = null;
	/**
	 * Вставить в запись
	 */
	public $insert_into_item = null;
	/**
	 * Загружено для этой записи
	 */
	public $uploaded_to_this_item = null;
	/**
	 * Миниатюра записи
	 */
	public $featured_image = null;
	/**
	 * Установить миниатюру записи
	 */
	public $set_featured_image = null;
	/**
	 * Удалить миниатюру записи
	 */
	public $remove_featured_image = null;
	/**
	 * Использовать как миниатюру записи
	 */
	public $use_featured_image = null;
	/**
	 * Фильтровать список записей
	 */
	public $filter_items_list = null;
	/**
	 * Навигация по записям
	 */
	public $items_list_navigation = null;
	/**
	 * Список записей
	 */
	public $items_list = null;
	/**
	 * Название меню. По умолчанию равен name.
	 */
	public $menu_name = null;
	/**
	 * Название в админ баре (тулбаре). По умолчанию равен singular_name.
	 */
	public $name_admin_bar = null;
	/**
	 * Название в тулбаре, для страницы архива типа записей. По умолчанию:
	 * «View Posts» / «View Pages». С WP 4.7.
	 */
	public $view_items = null;
	/**
	 * Название для метабокса атрибутов записи (у страниц это метабокс
	 * «Свойства страницы» - «Page Attributes»). По умолчанию: «Post
	 * Attributes» или «Page Attributes». С WP 4.7.
	 */
	public $attributes = null;

	/**
	 * Возвращает массив для использования в заголовках нового типа записей
	 *
	 * @return array
	 */
	public function getLabels() {
		return get_object_vars( $this );
	}
}