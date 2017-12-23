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
	
		$query = "INSERT INTO `experiencia_laboral` (`tutor`, `empresa_entidad`, `tipo`, `pais`, `departamento`, `municipio`, `correo_entidad`, `telefono`, `fecha_ingreso`, `fecha_retiro`, `cargo_contratado`, `dependencia`, `direccion`, `estado_contrato`) VALUES (:tutor, :empresa_entidad, :tipo, :pais, :departamento, :municipio, :correo_entidad, :telefono, :fecha_ingreso, :fecha_retiro, :cargo_contratado, :dependencia, :direccion, :estado_contrato)";
		
		$prepared = $db->prepare($query);
		try {
			$prepared->execute([
				'tutor' => $experienciaLaboralDTO->getTutor(), 
				'empresa_entidad' => $experienciaLaboralDTO->getEmpresaEntidad(),
				'tipo' => $experienciaLaboralDTO->getTipo(),
				'pais' => $experienciaLaboralDTO->getPais(),
				'departamento' => $experienciaLaboralDTO->getDepartamento(),
				'municipio' => $experienciaLaboralDTO->getMunicipio(),
				'correo_entidad' => $experienciaLaboralDTO->getCorreoEntidad(),
				'telefono' => $experienciaLaboralDTO->getTelefono(),
				'fecha_ingreso' => $experienciaLaboralDTO->getFechaIngreso(),
				'fecha_retiro' => $experienciaLaboralDTO->getFechaRetiro(),
				'cargo_contratado' => $experienciaLaboralDTO->getCargoContratado(),
				'dependencia' => $experienciaLaboralDTO->getDependencia(),
				'direccion' => $experienciaLaboralDTO->getDireccion(),
				'estado_contrato' => $experienciaLaboralDTO->getEstadoContrato()		
			]);
			//echo $prepared->debugDumpParams().'<br>';

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
}

 ?>