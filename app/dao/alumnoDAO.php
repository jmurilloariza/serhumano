<?php 

/**
* 
*/
require_once 'app/core/conexiondb.php';

class AlumnoDAO 
{
	
	function __construct()
	{
		
	}

	public function registrarAlumnoDAO($alumnoDTO)
	{
		try{
		$db = DB::getInstance();

		$statement ="INSERT INTO `alumnos`( `tipo_documento`, `numero_documento`, `lugar_exp_mun`, `lugar_exp_depto`, `apellido_1`, `apellido_2`, `nombre_1`, `nombre_2`, `fecha_nac`, `lugar_nac_mun`, `lugar_nac_depto`, `genero`, `discapacidad`, `cap_excepcionales`, `anexo_documento` , `email`) VALUES (:tipo_documento,  :numero_documento,  :lugar_exp_mun,  :lugar_exp_depto,  :apellido_1,  :apellido_2,  :nombre_1,  :nombre_2,  :fecha_nac,  :lugar_nac_mun,  :lugar_nac_depto,  :genero,  :discapacidad,  :cap_excepcionales , :anexo_documento , :email)";

			$prepared = $db->prepare($statement);
			
			$prepared->execute([
				'tipo_documento'=> $alumnoDTO->getTipo_documento(),
				'numero_documento'=> $alumnoDTO->getNumero_documento(),
				'lugar_exp_mun'=> $alumnoDTO->getLugar_exp_mun(),
				'lugar_exp_depto'=> $alumnoDTO->getLugar_exp_depto(),
				'apellido_1'=> $alumnoDTO->getApellido_1(),  
				'apellido_2'=> $alumnoDTO->getApellido_2(),
				'nombre_1'=> $alumnoDTO->getNombre_1(),  
				'nombre_2'=> $alumnoDTO->getNombre_2(),  
				'fecha_nac'=> $alumnoDTO->getFecha_nac(), 
				'lugar_nac_mun'=> $alumnoDTO->getLugar_nac_mun(),
				'lugar_nac_depto'=> $alumnoDTO->getLugar_nac_depto(),  
				'genero'=> $alumnoDTO->getGenero(),
				'discapacidad'=> $alumnoDTO->getDiscapacidad(),  
				'cap_excepcionales'=> $alumnoDTO->getCap_excepcionales(),
				'anexo_documento'=> $alumnoDTO->getAnexo_documento(),
				'email'=>$alumnoDTO->getEmail()
			]);
			
			//echo $prepared->debugDumpParams();
	
			//echo "Resultado--> ".$prepared->rowCount();


			} catch ( PDOException  $e ) {
				echo $e->getMessage();
  
			}	
	}


	public function consultarAlumno($alumnoDTO)
	{
		try{
		$db = DB::getInstance();
		$jsondata = array();

		$statement ="SELECT `alumno_id`, `tipo_documento`, `numero_documento`, `lugar_exp_mun`, `lugar_exp_depto`, `apellido_1`, `apellido_2`, `nombre_1`, `nombre_2`, `fecha_nac`, `lugar_nac_mun`, `lugar_nac_depto`, `genero`, `discapacidad`, `cap_excepcionales`, `anexo_documento` FROM `alumnos` WHERE `tipo_documento` = :tipo_documento AND `numero_documento` = :numero_documento" ;

			$prepared = $db->prepare($statement);
			echo "x ->".$alumnoDTO->getTipo_documento()."<br>";
			echo "y->".$alumnoDTO->getNumero_documento()."<br>";
			$prepared->execute([
				'tipo_documento'=> $alumnoDTO->getTipo_documento() ,
				'numero_documento'=> $alumnoDTO->getNumero_documento()
			]);
			//echo $prepared->debugDumpParams();

			if($prepared->rowCount()>0){
				$prepared->setFetchMode(PDO::FETCH_CLASS, 'AlumnoDTO');
				$alumno = array();
				$jsondata['SUCCES'] = 1;
	  			$alumnoDTO = $prepared->fetch();
	  				
  				$alumno['alumno_id'] = $alumnoDTO->getAlumno_id();
  				$alumno['tipo_documento'] = $alumnoDTO->getTipo_documento();
  				$alumno['numero_documento'] = $alumnoDTO->getNumero_documento();
  				$alumno['lugar_nac_mun'] = $alumnoDTO->getLugar_exp_mun();
  				$alumno['lugar_exp_depto'] = $alumnoDTO->getLugar_nac_depto();
  				$alumno['apellido_1'] = $alumnoDTO->getApellido_1();
  				$alumno['apellido_2'] = $alumnoDTO->getApellido_2();
  				$alumno['nombre_1'] = $alumnoDTO->getNombre_1();
  				$alumno['nombre_2'] = $alumnoDTO->getNombre_2();
  				$alumno['fecha_nac'] = $alumnoDTO->getFecha_nac();
  				$alumno['lugar_nac_mun'] = $alumnoDTO->getLugar_exp_mun();
  				$alumno['lugar_exp_depto'] = $alumnoDTO->getLugar_nac_depto();
  				$alumno['genero'] = $alumnoDTO->getGenero();
  				$alumno['discapacidad'] = $alumnoDTO->getDiscapacidad();
  				$alumno['cap_excepcionales'] = $alumnoDTO->getCap_excepcionales();
  				$alumno['anexo_documento'] = $alumnoDTO->getAnexo_documento();

  				$jsondata['alumno'] = $alumno;
  				return $jsondata;

			}

				$jsondata['SUCCES'] = 0;
				return $jsondata;
			
			} catch ( PDOException  $e ) {
				$jsondata['SUCCES'] = -1;
				echo "ERROR DE CONSULTA" . $e->getMessage();
				return $jsondata;
  
			}	
	}

	

}
