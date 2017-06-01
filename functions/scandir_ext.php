<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 01.06.2017
 * Time: 10:55
 *
 * @param string       $path       Путь к директории
 * @param array|string $extensions Расширение или массив с расширениями файлов
 * @param string       $file_name  Имя файла который надо найти
 *
 *
 * @return array
 */

function scandir_ext( $path, $extensions = [], $file_name = '' ) {
	$files = [];
	if ( ! count( $extensions ) ) {
		if ( count( $temp = scandir( $path ) ) ) {
			$files += $temp;
		}

	} else {
		if ( ! empty( $file_name ) ) {
			foreach ( $extensions as $extension ) {
				$file = $path . DIRECTORY_SEPARATOR . $file_name . '.' . $extension;
				if ( file_exists( $file ) ) {
					$files[] = $file_name . '.' . $extension;
				}
			}
		} else {
			$temp = scandir( $path );
			if ( is_string( $extensions ) ) {
				$extensions = [ $extensions ];
			}
			foreach ( $extensions as $extension ) {
				foreach ( $temp as $file ) {
					if ( substr( $file, - 4 ) == ( '.' . $extension ) ) {
						$files[] = $file;
					}
				}
			}

		}
		unset( $file );
	}
	unset( $temp );

	return $files;
}