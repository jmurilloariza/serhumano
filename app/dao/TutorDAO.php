<?php 

/**
* 
*/

require_once 'app/core/conexiondb.php';

class tutorDAO{
	
	function __construct(){
		
	}

	public function registrarTutor($tutorDTO){
		$db = DB::getInstance();
		//var_dump($tutorDTO);
	
		$query = "INSERT INTO `tutores` (`nombres`, `apellido1`, `apellido2`, `tipo_doc`, `numero`, `sexo`, `nacionalidad`, `lbrta_mil_clase`, 
                    `num_lbrta_mil`, `dm`, `fecha_nacim`, `pais_nacim`, `depto_nacim`, `mun_nacim`, `direccion_corresp`, `pais_corresp`, `depto_corresp`, 
                    `mun_corresp`, `telefono`, `email`, `ultm_grd_aprob`, `titulo_obtenido`, `fecha_grado`, `fecha_dilig`, `ciudad_dilig`, `observaciones`) 
                    VALUES (:nombres, :apellido1, :apellido2, :tipo_doc, :numero, :sexo, :nacionalidad, :lbrta_mil_clase, :num_lbrta_mil, :dm, 
                    :fecha_nacim, :pais_nacim, :depto_nacim, :mun_nacim, :direccion_corresp, :pais_corresp, :depto_corresp, :mun_corresp, :telefono, 
                    :email, :ultm_grd_aprob, :titulo_obtenido, :fecha_grado, :fecha_dilig, :ciudad_dilig, :observaciones);";

		$prepared = $db->prepare($query);
        try {
            $prepared->execute([
                'nombres' => $tutorDTO->getNombres(),
                'apellido1' => $tutorDTO->getApellido1(),
                'apellido2' => $tutorDTO->getApellido2(),
                'tipo_doc' => $tutorDTO->getTipoDoc(),
                'numero' => $tutorDTO->getNumero(),
                'sexo' => $tutorDTO->getSexo(),
                'nacionalidad' => $tutorDTO->getNacionalidad(),
                'lbrta_mil_clase' => $tutorDTO->getLbrtaMilClase(),
                'num_lbrta_mil' => $tutorDTO->getNumLbrtaMil(),
                'dm' => $tutorDTO->getDm(),
                'fecha_nacim' => $tutorDTO->getFechaNacim(),
                'pais_nacim' => $tutorDTO->getPaisNacim(),
                'depto_nacim' => $tutorDTO->getDeptoNacim(),
                'mun_nacim' => $tutorDTO->getMunNacim(),
                'direccion_corresp' => $tutorDTO->getDireccionCorresp(),
                'pais_corresp' => $tutorDTO->getPaisCorresp(),
                'depto_corresp' => $tutorDTO->getDeptoCorresp(),
                'mun_corresp' => $tutorDTO->getMunCorresp(),
                'telefono' => $tutorDTO->getTelefono(),
                'email' => $tutorDTO->getEmail(),
                'ultm_grd_aprob' => $tutorDTO->getUltmGrdAprob(),
                'titulo_obtenido' => $tutorDTO->getTituloObtenido(),
                'fecha_grado' => $tutorDTO->getFechaGrado(),
                'fecha_dilig' => $tutorDTO->getFechaDilig(),
                'ciudad_dilig' => $tutorDTO->getCiudadDilig(),
                'observaciones' => $tutorDTO->getObservaciones()
            ]);

            if($prepared->rowCount() > 0){
                return $db->lastInsertId();
            }else{
                return -1;
            }
        } catch (PDOException $e) {
            echo json_encode($prepared->errorInfo());
            echo $e;
            return -2;
        }

	}

    public function listarTutores(){
    	try {
    		$db = DB::getInstance();
    		$query = "SELECT `tutor_id`, `nombres`, `apellido1`, `apellido2`, `tipo_doc`, `numero`, `sexo`, `nacionalidad`, `lbrta_mil_clase`, `num_lbrta_mil`, `DM`, `fecha_nacim`, `pais_nacim`, `depto_nacim`, `mun_nacim`, `direccion_corresp`, `pais_corresp`, `depto_corresp`, `mun_corresp`, `telefono`, `email`, `ultm_grd_aprob`, `titulo_obtenido`, `fecha_grado`, `fecha_dilig`, `ciudad_dilig`, `observaciones` FROM `tutores`";

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

    		return json_encode($array);
    	} catch (PDOException $e) {
    		return json_encode(Respuesta::get(-2));
    	}
    }

    public function obtenerDatosTutor($tutorDTO){
        try {
            $db = DB::getInstance();
            $query = "SELECT `tutor_id`, `nombres`, `apellido1`, `apellido2`, `tipo_doc`, `numero`, `sexo`, `nacionalidad`, `lbrta_mil_clase`, `num_lbrta_mil`, `DM`, `fecha_nacim`, `pais_nacim`, `depto_nacim`, `mun_nacim`, `direccion_corresp`, `pais_corresp`, `depto_corresp`, `mun_corresp`, `telefono`, `email`, `ultm_grd_aprob`, `titulo_obtenido`, `fecha_grado`, `fecha_dilig`, `ciudad_dilig`, `observaciones` FROM `tutores` WHERE `tipo_doc` = :tipo_doc AND `numero` = :numero";

            $prepared = $db->prepare($query);
            $prepared->execute([
                'tipo_doc'=> $tutorDTO->getTipoDoc(),
                'numero'=> $tutorDTO->getNumero()
            ]);

            if($prepared->rowCount()>0){
                $row = $prepared->fetch(PDO::FETCH_ASSOC);
                $tutor = (['message' => Respuesta::get(2)]);
    			$tutor = ($tutor+['data' => $row]);
    			return $tutor;
            }

            return Respuesta::get(0);
        } catch (PDOException $e) {
            return Respuesta::get(-2);
        }
    }

    public function eliminarTutor($tutorDTO){

    }

    public function actualizarTutor($cedula, $tutorDTO){

    }
}

 ?>