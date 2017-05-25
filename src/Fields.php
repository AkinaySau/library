<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 23.05.2017
 * Time: 15:12
 */

namespace Sau\Lib;

class Fields {
	//TODO: Кнопка
	//TODO: отправка формы
	/**
	 * Basic select
	 *
	 * @param string $name    Field name
	 * @param array  $options Array where $key->option_value and $value->label
	 * @param null   $select  $key to select element
	 * @param bool   $echo    If true render this field, else return string
	 * @param array  $attr    Array for tag attributes
	 *
	 * @return bool|string
	 */
	public static function select( $name, $options = [], $select = null, $echo = false, $attr = [] ) {
		$attr['name'] = $name;

		$attr = self::attributes( $attr );

		$options = implode( self::options( $options, $select ) );

		$field = "<select {$attr}>{$options}</select>";
		if ( $echo )
		{
			echo $field;

			return true;
		}
		else
		{
			return $field;
		}
	}

	/**
	 * Basic textarea
	 *
	 * @param string         $name  Field name
	 * @param string|integer $value Field value
	 * @param boolean        $echo  If true render this field, else return string
	 * @param array          $attr  Array for tag attributes
	 *
	 * @return string|boolean
	 */
	public static function textarea( $name, $value = '', $echo = false, $attr = [] ) {
		$attr['name'] = $name;
		if ( ! isset( $attr['id'] ) )
		{
			$attr['id'] = time() . '-' . $name;
		}

		$attr = self::attributes( $attr );

		$field = "<textarea {$attr}>{$value}</textarea>";
		if ( $echo )
		{
			echo $field;

			return true;
		}
		else
		{
			return $field;
		}
	}

	/**
	 *  Basic input
	 *
	 * @param string         $name   Field name
	 * @param string|integer $value  Field value
	 * @param string         $type   Type field
	 * @param boolean        $render If true render this field, else return string
	 * @param array          $attr   Array for tag attributes
	 *
	 * @return bool|string
	 */
	public static function input( $name, $value = '', $type = 'text', $render = false, $attr = [] ) {
		$attr['name']  = $name;
		$attr['value'] = $value;
		$attr['type']  = $type;

		$attr = self::attributes( $attr );

		$field = "<input {$attr}/>";

		if ( $render )
		{
			echo $field;

			return true;
		}
		else
		{
			return $field;
		}
	}

	/**
	 * Generate attribute for tag
	 *
	 * @param array $attr This array contain attributes in format $key=attribute and $value=attribute_value
	 *
	 * @return string
	 */
	public static function attributes( $attr ) {
		$temp = [];
		if ( count( $attr ) && is_array( $attr ) )
		{
			foreach ( $attr as $name => $value )
			{
				$temp[] = $name . '="' . $value . '"';
			}
		}

		return implode( ' ', $temp );
	}

	/**
	 * Generate options list
	 *
	 * @param array|object $options This array(object) contain options in format $key = value and $value = label
	 * @param string       $select  Field value
	 *
	 * @return bool|array
	 */
	public static function options( $options, $select = null ) {

		if ( ( ! is_array( $options ) && ! is_object( $options ) ) )
		{
			return false;
		}
		$option = [];
		foreach ( $options as $value => $label )
		{
			$attr = [ 'value' => $value ];
			if ( $value == $select )
			{
				$attr['selected'] = 'selected';
			}
			$option[] .= '<option ' . self::attributes( $attr ) . '>' . $label . '</option>';
		}

		return $option;
	}
}