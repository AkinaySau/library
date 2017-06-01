<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 30.05.2017
 * Time: 12:14
 */

namespace Sau\Lib\Query;


//TODO: PHPDoc
//TODO: Написать
class PostsDropDown {
	protected $setting = [];

	public static function init() {
		return new self();
	}

	public function depth( $depth ) {
		$this->setting['depth'] = $depth;
	}

	public function childOf( $child_of ) {
		$this->setting['child_of'] = $child_of;
	}

	public function selected( $selected ) {
		$this->setting['$selected'] = $selected;
	}

	public function echo ( $echo ) {
		$this->setting['echo'] = $echo;
	}

	public function name( $name ) {
		$this->setting['name'] = $name;
	}

	public function showOptionNone( $show_option_none ) {
		$this->setting['show_option_none'] = $show_option_none;
	}

	public function exclude( $exclude ) {
		$this->setting['exclude'] = $exclude;
	}

	public function excludeTree( $exclude_tree ) {
		$this->setting['exclude_tree'] = $exclude_tree;
	}

	public function valueField( $value_field ) {
		$this->setting['value_field'] = $value_field;
	}

	public function getPosts() {
		return wp_dropdown_pages( $this->setting );
	}

	public function clear() {
		$this->setting = [];

		return $this;
	}
}