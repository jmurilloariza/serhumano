<?php 

require_once 'app/core/conexiondb.php';

/**
* 
*/
class ExperienciaLaboralDAO{
	
	function __construct(){
		
	}

	public function registrarExperienciaLaboral($experienciaLaboralDTO){
		$db = DB::getInstance();
	
		$query = "INSERT INTO `experiencia_laboral` (`tutor`, `empresa_entidad`, `tipo`, `pais`, `depto`, `mun`, `correo_entidad`, 
                `telefono`, `fecha_ingreso`, `fecha_retiro`, `cargo_contratado`, `dependencia`, `direccion`, `estado_contrato`) VALUES (:tutor, 
                :empresa_entidad, :tipo, :pais, :depto, :mun, :correo_entidad, :telefono, :fecha_ingreso, :fecha_retiro, :cargo_contratado, 
                :dependencia, :direccion, :estado_contrato)";
		
		$prepared = $db->prepare($query);

		try {
			$prepared->execute([
				'tutor' => $experienciaLaboralDTO->getTutor(), 
				'empresa_entidad' => $experienciaLaboralDTO->getEmpresaEntidad(),
				'tipo' => $experienciaLaboralDTO->getTipo(),
				'pais' => $experienciaLaboralDTO->getPais(),
				'depto' => $experienciaLaboralDTO->getDepto(),
				'mun' => $experienciaLaboralDTO->getMun(),
				'correo_entidad' => $experienciaLaboralDTO->getCorreoEntidad(),
				'telefono' => $experienciaLaboralDTO->getTelefono(),
				'fecha_ingreso' => $experienciaLaboralDTO->getFechaIngreso(),
				'fecha_retiro' => $experienciaLaboralDTO->getFechaRetiro(),
				'cargo_contratado' => $experienciaLaboralDTO->getCargoContratado(),
				'dependencia' => $experienciaLaboralDTO->getDependencia(),
				'direccion' => $experienciaLaboralDTO->getDireccion(),
				'estado_contrato' => $experienciaLaboralDTO->getEstadoContrato()		
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

	public function listarExperienciasLaboralesTutor($tutorDTO){
        try {
            $db = DB::getInstance();
            $query = " SELECT `experiencia_id`, `tutor`, `empresa_entidad`, `tipo`, `pais`, d.departamento, 
                m.municipio, `correo_entidad`, `telefono`, `fecha_ingreso`, `fecha_retiro`, `cargo_contratado`, 
                `dependencia`, `direccion`, `estado_contrato` FROM `experiencia_laboral` JOIN municipios AS m 
                ON mun = m.num_municipio JOIN departamentos AS d ON m.num_departamento = d.num_departamento 
                WHERE `tutor` = :tutor";

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

