<?php 

require_once 'app/core/conexiondb.php';

/**
* 
*/
class EducacionSuperiorDAO{
	
	function __construct(){
		
	}

	public function registrarEducacionSuperior($educacionSuperiorDTO){
		$db = DB::getInstance();

		var_dump($educacionSuperiorDTO);

		$query = "INSERT INTO `educacion_superior` (`modalidad_academica_id`, `tutor`, `numero_semest_aprob`, `graduado`, `estudio_titulo_obte`, `fecha_terminacion`, `num_tarjeta_prof`) VALUES (:modalidad_academica_id, :tutor, :numero_semest_aprob, :graduado, :estudio_titulo_obte, :fecha_terminacion, :num_tarjeta_prof)";
		
		$prepared = $db->prepare($query);
		try {
			$prepared->execute([
				'modalidad_academica_id' => $educacionSuperiorDTO->getModalidadAcademicaId(),
				'tutor' => $educacionSuperiorDTO->getTutor(),
				'numero_semest_aprob' => $educacionSuperiorDTO->getNumeroSemestAprob(),
				'graduado' => $educacionSuperiorDTO->getGraduado(),
				'estudio_titulo_obte' => $educacionSuperiorDTO->getEstudioTituloObte(),
				'fecha_terminacion' => $educacionSuperiorDTO->getFechaTerminacion(),
				'num_tarjeta_prof' => $educacionSuperiorDTO->getNumTarjetaProf()
			]);
            echo $prepared->errorInfo();
            if($prepared->rowCount() > 0){
                return 0;
            }else{
                return 1;
            }
        } catch (PDOException $e) {
		    echo $e;
            return 1;
        }
	}
}

 ?>