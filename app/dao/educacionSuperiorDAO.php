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
                return 0;
            }else{
                return 1;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return 1;
        }
	}

	public function listarEstudiosSuperioresTutor($tutorDTO){
        try {
            $db = DB::getInstance();
            $query = " SELECT `educacion_superior_id`, `modalidad_academica_id`, md.modalidad AS 
                modalidad_academica, `tutor`, `numero_semest_aprob`, `graduado`, `estudio_titulo_obte`, 
                `fecha_terminacion`, `num_tarjeta_prof` FROM `educacion_superior`JOIN modalidad_academica AS
                 md ON modalidad_academica_id = md.modalidad_id WHERE `tutor` = :tutor";

            $prepared = $db->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $prepared->execute([
                'tutor' => $tutorDTO->getTutorId()
            ]);

            if($prepared->rowCount() < 1){
                return json_encode(Respuesta::get(-2));
            }

            $array = array();
            $array2 = array();
            while ($data = $prepared->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
                array_push($array2, $data);
            }

            $array = ($array+['message' => Respuesta::get(2)]);
            $array = ($array+['data' => $array2]);

            return $array;
        } catch (PDOException $e) {
            return json_encode(Respuesta::get(-2));
        }
    }
}

 ?>