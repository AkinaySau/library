<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 27.06.2017
 * Time: 9:43
 */

namespace Sau\Lib;

/**
 * Class create labels for Posts type
 * After sets labels call to getLabels for return labels array
 * If you use WP_Post_Type convert array to object
 */
class PostLabels {
	protected $name;
	protected $singular_name;
	protected $add_new;
	protected $add_new_item;
	protected $edit_item;
	protected $new_item;
	protected $view_item;
	protected $search_items;
	protected $not_found;
	protected $not_found_in_trash;
	protected $parent_item_colon;
	protected $all_items;
	protected $archives;
	protected $insert_into_item;
	protected $uploaded_to_this_item;
	protected $featured_image;
	protected $set_featured_image;
	protected $remove_featured_image;
	protected $use_featured_image;
	protected $filter_items_list;
	protected $items_list_navigation;
	protected $items_list;
	protected $menu_name;
	protected $name_admin_bar;
	protected $view_items;
	protected $attributes;

	/**
	 * Init method
	 *
	 * @return PostLabels
	 */
	public static function init() {
		return new self();
	}

	/**
	 * Generate Labels Array
	 *
	 * @return array Labels for Post
	 */
	public function getLabels() {
		return array_diff( get_object_vars( $this ), [ null ] );
	}

	/**
	 * General name for the post type, usually plural. The same and overridden by $post_type_object->label. Default is Posts/Page
	 *
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName( string $name ) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Name for one object of this post type. Default is Post/Page
	 *
	 * @param string $singular_name
	 *
	 * @return $this
	 */
	public function setSingularName( string $singular_name ) {
		$this->singular_name = $singular_name;

		return $this;
	}

	/**
	 * The add new text. The default is "Add New" for both hierarchical and non-hierarchical post types. When internationalizing this string, please use a gettext context matching your post type. Example: _x('Add New', 'product');
	 *
	 * @param string $add_new
	 *
	 * @return $this
	 */
	public function setAddNew( string $add_new ) {
		$this->add_new = $add_new;

		return $this;
	}

	/**
	 * Default is Add New Post/Add New Page.
	 *
	 * @param string $add_new_item
	 *
	 * @return $this
	 */
	public function setAddNewItem( string $add_new_item ) {
		$this->add_new_item = $add_new_item;

		return $this;
	}

	/**
	 * Default is Edit Post/Edit Page.
	 *
	 * @param string $edit_item
	 *
	 * @return $this
	 */
	public function setEditItem( string $edit_item ) {
		$this->edit_item = $edit_item;

		return $this;
	}

	/**
	 * Default is New Post/New Page.
	 *
	 * @param string $new_item
	 *
	 * @return $this
	 */
	public function setNewItem( string $new_item ) {
		$this->new_item = $new_item;

		return $this;
	}

	/**
	 * Default is View Post/View Page.
	 *
	 * @param string $view_item
	 *
	 * @return $this
	 */
	public function setViewItem( string $view_item ) {
		$this->view_item = $view_item;

		return $this;
	}

	/**
	 * Default is Search Posts/Search Pages.
	 *
	 * @param string $search_items
	 *
	 * @return $this
	 */
	public function setSearchItems( string $search_items ) {
		$this->search_items = $search_items;

		return $this;
	}

	/**
	 * Default is No posts found/No pages found.
	 *
	 * @param string $not_found
	 *
	 * @return $this
	 */
	public function setNotFound( string $not_found ) {
		$this->not_found = $not_found;

		return $this;
	}

	/**
	 * Default is No posts found in Trash/No pages found in Trash.
	 *
	 * @param string $not_found_in_trash
	 *
	 * @return $this
	 */
	public function setNotFoundInTrash( string $not_found_in_trash ) {
		$this->not_found_in_trash = $not_found_in_trash;

		return $this;
	}

	/**
	 * This string isn't used on non-hierarchical types. In hierarchical ones the default is 'Parent Page:'.
	 *
	 * @param string $parent_item_colon
	 *
	 * @return $this
	 */
	public function setParentItemColon( string $parent_item_colon ) {
		$this->parent_item_colon = $parent_item_colon;

		return $this;
	}

	/**
	 * String for the submenu. Default is All Posts/All Pages.
	 *
	 * @param string $all_items
	 *
	 * @return $this
	 */
	public function setAllItems( string $all_items ) {
		$this->all_items = $all_items;

		return $this;
	}

	/**
	 * String for use with archives in nav menus. Default is Post Archives/Page Archives.
	 *
	 * @param string $archives
	 *
	 * @return $this
	 */
	public function setArchives( string $archives ) {
		$this->archives = $archives;

		return $this;
	}

	/**
	 * String for the media frame button. Default is Insert into post/Insert into page.
	 *
	 * @param string $insert_into_item
	 *
	 * @return $this
	 */
	public function setInsertIntoItem( string $insert_into_item ) {
		$this->insert_into_item = $insert_into_item;

		return $this;
	}

	/**
	 * String for the media frame filter. Default is Uploaded to this post/Uploaded to this page.
	 *
	 * @param string $uploaded_to_this_item
	 *
	 * @return $this
	 */
	public function setUploadedToThisItem( string $uploaded_to_this_item ) {
		$this->uploaded_to_this_item = $uploaded_to_this_item;

		return $this;
	}

	/**
	 * Default is Featured Image.
	 *
	 * @param string $featured_image
	 *
	 * @return $this
	 */
	public function setFeaturedImage( string $featured_image ) {
		$this->featured_image = $featured_image;

		return $this;
	}

	/**
	 * Default is Set featured image.
	 *
	 * @param string $set_featured_image
	 *
	 * @return $this
	 */
	public function setSetFeaturedImage( string $set_featured_image ) {
		$this->set_featured_image = $set_featured_image;

		return $this;
	}

	/**
	 * Default is Remove featured image
	 *
	 * @param string $remove_featured_image
	 *
	 * @return $this
	 */
	public function setRemoveFeaturedImage( string $remove_featured_image ) {
		$this->remove_featured_image = $remove_featured_image;

		return $this;
	}

	/**
	 * Default is Use as featured image
	 *
	 * @param string $use_featured_image
	 *
	 * @return $this
	 */
	public function setUseFeaturedImage( string $use_featured_image ) {
		$this->use_featured_image = $use_featured_image;

		return $this;
	}

	/**
	 * String for the table views hidden heading
	 *
	 * @param string $filter_items_list
	 *
	 * @return $this
	 */
	public function setFilterItemsList( string $filter_items_list ) {
		$this->filter_items_list = $filter_items_list;

		return $this;
	}

	/**
	 * String for the table pagination hidden heading
	 *
	 * @param string $items_list_navigation
	 *
	 * @return $this
	 */
	public function setItemsListNavigation( string $items_list_navigation ) {
		$this->items_list_navigation = $items_list_navigation;

		return $this;
	}

	/**
	 * String for the table hidden heading
	 *
	 * @param string $items_list
	 *
	 * @return $this
	 */
	public function setItemsList( string $items_list ) {
		$this->items_list = $items_list;

		return $this;
	}

	/**
	 * Default is the same as `name`
	 *
	 * @param string $menu_name
	 *
	 * @return $this
	 */
	public function setMenuName( string $menu_name ) {
		$this->menu_name = $menu_name;

		return $this;
	}

	/**
	 * String for use in New in Admin menu bar. Default is the same as `singular_name`
	 *
	 * @param string $name_admin_bar
	 *
	 * @return $this
	 */
	public function setNameAdminBar( string $name_admin_bar ) {
		$this->name_admin_bar = $name_admin_bar;

		return $this;
	}

	/**
	 * Label for viewing post type archives. Default is 'View Posts' / 'View Pages'.
	 *
	 * @param string $view_items
	 *
	 * @return $this
	 */
	public function setViewItems( string $view_items ) {
		$this->view_items = $view_items;

		return $this;
	}

	/**
	 * Label for the attributes meta box. Default is 'Post Attributes' / 'Page Attributes'.
	 *
	 * @param string $attributes
	 *
	 * @return $this
	 */
	public function setAttributes( string $attributes ) {
		$this->attributes = $attributes;

		return $this;
	}
}