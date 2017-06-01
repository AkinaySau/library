<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 01.06.2017
 * Time: 10:55
 *
 * @param string $path       Путь к директории
 * @param array  $extensions Массив с расширениями файлов
 * @param string $file_name  Имя файла который надо найти
 *
 * @return bool|string
 */

function scandir_ext( $path, $extensions = [], $file_name = '' ) {
	if ( ! count( $extensions ) ) {
		return scandir( $path );
	} else {
		$files = [];
		if ( ! empty( $file_name ) ) {
			foreach ( $extensions as $extension ) {
				$file = $path . DIRECTORY_SEPARATOR . $file_name . '.' . $extension;
				if ( file_exists( $file ) ) {
					$files[] = $file;
				}
				unset( $file );
			}
		} else {
			$temp  = scandir( $path );
			$files = [];
			foreach ( $extensions as $extension ) {
				foreach ( $temp as $file ) {
					if ( substr( $file, - 4 ) == ( '.' . $extension ) ) {
						$files[] = $file;
					}
				}
			}
			unset( $temp, $file );

		}

		return $files;
	}
}