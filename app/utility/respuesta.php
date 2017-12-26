
<?php

/**
* 
*/
class Respuesta{
	
	private static $response = array(
		0 => [
			'codigo' => 0, 
			'msj' => 'No existen registro', 
			'tipo' => 'Warning'
		], 
		1 => [
			'codigo' => 1, 
			'msj' => 'Registro exitoso', 
			'tipo' => 'Success'
		],
		-1 => [
			'codigo' => -1, 
			'msj' => 'No se puede realizar el registro, intente de nuevo.', 
			'tipo' => 'Error'
		],
		2 => [
			'codigo' => 2, 
			'msj' => 'Consulta Exitosa', 
			'tipo' => 'Success'
		],
		-2 => [
			'codigo' => -2, 
			'msj' => 'No se puede realizar la consulta, intente de nuevo.', 
			'tipo' => 'Error'
		],
		3 => [
			'codigo' => 3, 
			'msj' => 'Modificación exitosa', 
			'tipo' => 'Success'
		],
		-3 => [
			'codigo' => -3, 
			'msj' => 'No se puede realizar la modificación, intente de nuevo.', 
			'tipo' => 'Error'
		],
		4 => [
			'codigo' => 4, 
			'msj' => 'Eliminación exitosa', 
			'tipo' => 'Success'
		],
		-4 => [
			'codigo' => -4, 
			'msj' => 'No se puede realizar la eliminación, intente de nuevo.', 
			'tipo' => 'Error'
		],
		5 => [
			'codigo' => 5, 
			'msj' => 'Correo ya existe', 
			'tipo' => 'Warning'
		],
		-5 => [
			'codigo' => -5, 
			'msj' => 'Correo no existe en registro', 
			'tipo' => 'Error'
		],
		101 => [
			'codigo' => 101, 
			'msj' => 'Ya existe un registro', 
			'tipo' => 'Warning'
		],
		102 => [
			'codigo' => 102, 
			'msj' => 'Datos erróneos', 
			'tipo' => 'Error'
		],
		103 => [
			'codigo' => 103, 
			'msj' => 'Las contraseñas no coinciden', 
			'tipo' => 'Error'
		],
		104 => [
			'codigo' => 104, 
			'msj' => 'No se puede procesar la solicitud', 
			'tipo' => 'Error'
		],
		105 => [
			'codigo' => 105, 
			'msj' => 'Correo no válido', 
			'tipo' => 'Error'
		],
		106 => [
			'codigo' => 106, 
			'msj' => 'El archivo no es de la extensión permitida', 
			'tipo' => 'Error'
		],
		107 => [
			'codigo' => 107, 
			'msj' => 'Archivo con error', 
			'tipo' => 'Error'
		],
		108 => [
			'codigo' => 108, 
			'msj' => 'Faltan datos', 
			'tipo' => 'Error'
		],
		109 => [
			'codigo' => 109, 
			'msj' => 'Ha ocurrido un error inesperado', 
			'tipo' => 'Error'
		]);

	public static function insert($row){
		self::$response = self::$response + $row;
	}

	public static function get($code){
		return self::$response[$code];
	}

}

 ?>