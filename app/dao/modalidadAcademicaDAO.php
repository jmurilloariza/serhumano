<?php 

require_once 'app/core/conexiondb.php';

/**
* 
*/
class ModalidadAcademicaDAO{
	
	public function __construct(){
		
	}

	public function registrarModalidadAcademica($modalidadAcademicaDTO){

		$db = DB::getInstance();
	
		$query = "INSERT INTO `modalidad_academica` (`modalidad`) VALUES (:modalidad)";
		
		$prepared = $db->prepare($query);
		try {
			$prepared->execute([
				'modalidad' => $modalidadAcademicaDTO->getModalidad()
			]);
			//echo $prepared->debugDumpParams().'<br>';
			echo "<br>Resultado--> ".$prepared->rowCount();

			if($prepared->rowCount() > 0){
				return 'Datos insertados con exito';
			}else{
				return 'Los datos no se han insertado';
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
			return 'Ha ocurrido un error en el registro del tutor';
		}
	}
}

 ?>