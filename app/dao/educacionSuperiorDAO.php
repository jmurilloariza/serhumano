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

		echo 'asdasdasda';

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
            if($prepared->rowCount() > 0){
                echo '000000';
                return 0;
            }else{
                echo '1111111';
                return 1;
            }
        } catch (PDOException $e) {
            echo ($prepared->errorInfo());
            echo $e;
            return 1;
        }
	}
}

 ?>