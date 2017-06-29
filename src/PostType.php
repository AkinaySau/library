<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 29.06.2017
 * Time: 12:03
 */

namespace Sau\Lib;


use WP_Error;
use WP_Post_Type;

final class PostType {

	public $post_object;
	protected $post_type;

	/**
	 * Constructor.
	 *
	 * Will populate object properties from the provided arguments and assign other
	 * default properties based on that information.
	 *
	 * @since  4.6.0
	 * @access public
	 *
	 * @see    register_post_type()
	 *
	 * @param string       $post_type Post type key.
	 * @param array|string $args      Optional. Array or string of arguments for registering a post type.
	 *                                Default empty array.
	 */
	public function __construct( $post_type, $args = [] ) {
		$this->post_type   = $post_type;
		$this->post_object = new WP_Post_Type( $this->post_type, $args );
	}

	/**
	 * @see WP_Post_Type
	 *
	 * @param string       $post_type Post type key.
	 * @param array|string $args      Optional. Array or string of arguments for registering a post type.
	 *                                Default empty array.
	 *
	 * @return PostType
	 */
	public static function init( $post_type, $args = [] ) {
		return new self( $post_type, $args );
	}

	public function load() {
		if ( $this->post_object instanceof WP_Post_Type )
		{
			global $wp_post_types;

			if ( ! is_array( $wp_post_types ) )
			{
				$wp_post_types = array();
			}

			if ( ! in_array( $this->post_type, $wp_post_types ) )
			{
				$wp_post_types[$this->post_type] = $this->post_object;
			}
		}
		else
		{
			new WP_Error( 'add_post_type_' . $this->post_type, __( sprintf( 'Post type(%s) is not added', $this->post_type ) ) );
		}
	}
}