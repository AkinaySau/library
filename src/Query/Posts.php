<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 30.05.2017
 * Time: 12:14
 */

namespace Sau\Lib\Query;


//TODO: PHPDoc
class Posts {
	protected $setting = [];

	public static function init() {
		return new self();
	}

	/**
	 *
	 * @param integer $numberposts
	 *
	 * @return $this
	 * @internal param int $var
	 *
	 */
	public function numberposts( $numberposts ) {
		$this->setting['numberposts'] = $numberposts;

		return $this;
	}

	public function offset( $var ) {
		$this->setting['offset'] = $var;

		return $this;
	}

	public function category( $var ) {
		$this->setting['category'] = $var;

		return $this;
	}

	public function categoryName( $var ) {
		$this->setting['category_name'] = $var;

		return $this;
	}

	public function tag( $var ) {
		$this->setting['tag'] = $var;

		return $this;
	}

	public function include ( $var ) {
		$this->setting['include'] = $var;

		return $this;
	}

	public function exclude( $var ) {
		$this->setting['exclude'] = $var;

		return $this;
	}

	public function meta( $key, $value ) {
		$this->setting['meta_key']   = $key;
		$this->setting['meta_value'] = $value;

		return $this;
	}

	public function postType( $var ) {
		$this->setting['post_type'] = $var;

		return $this;
	}

	public function postMimeType( $var ) {
		$this->setting['post_mime_type'] = $var;

		return $this;
	}

	public function postStatus( $var ) {
		$this->setting['post_status'] = $var;

		return $this;
	}

	public function postParent( $var ) {
		$this->setting['post_parent'] = $var;

		return $this;
	}

	public function nopaging( $var ) {
		$this->setting['nopaging'] = $var;

		return $this;
	}

	public function orderby( $var ) {
		$this->setting['orderby'] = $var;

		return $this;
	}

	public function order( $var ) {
		$this->setting['order'] = $var;

		return $this;
	}

	public function suppress_filters( $var ) {
		$this->setting['suppressFilters'] = $var;

		return $this;
	}

	public function getPosts() {
		return get_posts( $this->setting );
	}

}