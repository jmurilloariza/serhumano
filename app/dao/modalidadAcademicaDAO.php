<?php 

require_once 'app/core/conexiondb.php';

/**
* 
*/
class ModalidadAcademicaDAO{
	
	public function __construct(){
		
	}

	public function registrarModalidadAcademica($modalidadAcademicaDTO){
		try {
			$db = DB::getInstance();
			$query = "INSERT INTO `modalidad_academica` (`modalidad`) VALUES (:modalidad)";
			$prepared = $db->prepare($query);
			$prepared->execute([
				'modalidad' => $modalidadAcademicaDTO->getModalidad()
			]);

			if($prepared->rowCount() > 0){
				return Respuesta::get(1);
			}else{
				return Respuesta::get(-1);
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
			return 'Ha ocurrido un error en el registro del tutor';
		}
	}

	public function listarModalidadesAcademicas(){
		try {
    		$db = DB::getInstance();
    		$query = "SELECT `modalidad_id`, `modalidad` FROM `modalidad_academica`";

    		$prepared = $db->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    		$prepared->execute();

    		if($prepared->rowCount() < 1){
    			return json_encode(Respuesta::get(0));
    		}

    		$array = array();
    		$array2 = array();
    		while ($data = $prepared->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
	    		array_push($array2, $data);
    		}

    		$array = ($array+['message' => Respuesta::get(1)]);
    		$array = ($array+['data' => $array2]);

    		return $array;
    	} catch (PDOException $e) {
    		return json_encode(Respuesta::get(-2));
    	}
	}
}

 ?>