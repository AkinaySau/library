<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 29.05.2017
 * Time: 17:30
 */

namespace Sau\Lib;


class HF {
	/**
	 * Enqueue a CSS stylesheet.
	 *
	 * Registers the style if source provided (does NOT overwrite) and enqueues.
	 *
	 * @param string           $handle Name of the stylesheet. Should be unique.
	 * @param string           $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
	 *                                 Default empty.
	 * @param array            $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	 * @param string|bool|null $ver    Optional. String specifying stylesheet version number, if it has one, which is added to the URL
	 *                                 as a query string for cache busting purposes. If version is set to false, a version
	 *                                 number is automatically added equal to current installed WordPress version.
	 *                                 If set to null, no version is added.
	 * @param string           $media  Optional. The media for which this stylesheet has been defined.
	 *                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	 *                                 '(orientation: portrait)' and '(max-width: 640px)'.
	 */
	public static function addStyle( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' ) {
		$callback = function () use ( &$handle, &$src, &$deps, &$ver, &$media ) {
			// https://wp-kama.ru/function/wp_enqueue_style
			wp_enqueue_style( $handle, $src, $deps, $ver, $media );
		};
		Action::wpEnqueueScripts( $callback );
	}

	/**
	 * Enqueue a script.
	 *
	 * Registers the script if $src provided (does NOT overwrite), and enqueues it.
	 *
	 * @param string           $handle    Name of the script. Should be unique.
	 * @param string           $src       Full URL of the script, or path of the script relative to the WordPress root directory.
	 *                                    Default empty.
	 * @param array            $deps      Optional. An array of registered script handles this script depends on. Default empty array.
	 * @param string|bool|null $ver       Optional. String specifying script version number, if it has one, which is added to the URL
	 *                                    as a query string for cache busting purposes. If version is set to false, a version
	 *                                    number is automatically added equal to current installed WordPress version.
	 *                                    If set to null, no version is added.
	 * @param bool             $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
	 *                                    Default 'false'.
	 */
	public static function addScript( $handle, $src = '', $deps = array(), $ver = false, $in_footer = false ) {
		$callback = function () use ( &$handle, &$src, &$deps, &$ver, &$in_footer ) {
			// https://wp-kama.ru/function/wp_enqueue_script
			wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
		};
		Action::wpEnqueueScripts( $callback );
	}
}