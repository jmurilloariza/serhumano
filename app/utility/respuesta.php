
<?php

/**
* 
*/
class Respuesta{
	
	private static $response = array(
		0 => [
			'codigo' => 0, 
			'mensage' => 'No existen registro', 
			'tipo' => 'Warning'
		], 
		1 => [
			'codigo' => 1, 
			'mensage' => 'Registro exitoso', 
			'tipo' => 'Success'
		],
		-1 => [
			'codigo' => -1, 
			'mensage' => 'No se puede realizar el registro, intente de nuevo.', 
			'tipo' => 'Error'
		],
		2 => [
			'codigo' => 2, 
			'mensage' => 'Consulta Exitosa', 
			'tipo' => 'Success'
		],
		-2 => [
			'codigo' => -2, 
			'mensage' => 'No se puede realizar la consulta, intente de nuevo.', 
			'tipo' => 'Error'
		],
		3 => [
			'codigo' => 3, 
			'mensage' => 'Modificación exitosa', 
			'tipo' => 'Success'
		],
		-3 => [
			'codigo' => -3, 
			'mensage' => 'No se puede realizar la modificación, intente de nuevo.', 
			'tipo' => 'Error'
		],
		4 => [
			'codigo' => 4, 
			'mensage' => 'Eliminación exitosa', 
			'tipo' => 'Success'
		],
		-4 => [
			'codigo' => -4, 
			'mensage' => 'No se puede realizar la eliminación, intente de nuevo.', 
			'tipo' => 'Error'
		],
		5 => [
			'codigo' => 5, 
			'mensage' => 'Correo ya existe', 
			'tipo' => 'Warning'
		],
		-5 => [
			'codigo' => -5, 
			'mensage' => 'Correo no existe en registro', 
			'tipo' => 'Error'
		],
		101 => [
			'codigo' => 101, 
			'mensage' => 'Ya existe un registro', 
			'tipo' => 'Error'
		],
		102 => [
			'codigo' => 102, 
			'mensage' => 'Datos erróneos', 
			'tipo' => 'Error'
		],
		103 => [
			'codigo' => 103, 
			'mensage' => 'Las contraseñas no coinciden', 
			'tipo' => 'Error'
		],
		104 => [
			'codigo' => 104, 
			'mensage' => 'No se puede procesar la solicitud', 
			'tipo' => 'Error'
		],
		105 => [
			'codigo' => 105, 
			'mensage' => 'Correo no válido', 
			'tipo' => 'Error'
		],
		106 => [
			'codigo' => 106, 
			'mensage' => 'El archivo no es de la extensión permitida', 
			'tipo' => 'Error'
		],
		107 => [
			'codigo' => 107, 
			'mensage' => 'Archivo con error', 
			'tipo' => 'Error'
		],
		108 => [
			'codigo' => 108, 
			'mensage' => 'Faltan datos', 
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