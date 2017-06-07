<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 07.06.2017
 * Time: 10:55
 *
 */

/**
 * Функция является обёрткой для создания констант
 *
 * @param string $name             Название константы
 * @param mixed  $value            Значение константы
 * @param bool   $case_insensitive Если задано значение TRUE, константа будет определена с учётом регистра. По умолчанию - с учётом регистра; т.е. CONSTANT и Constant это разные значения
 *
 * @return mixed true - если константа успешно зарегистрирована, или её значение если константа была ранее объявлена
 */

function sau_define( $name, $value, $case_insensitive = false ) {
	if ( ! defined( $name ) ) {
		return define( $name, $value, $case_insensitive );
	} else {
		return constant( $name );
	}
}