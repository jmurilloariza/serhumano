<?php 

/**
* 
*/
require_once 'app/model/alumnoModel.php';
require_once 'app/dto/alumnoDTO.php';

class AlumnoController 
{
	
	private $alumnoModel;
	
	function __construct()
	{
		$this->alumnoModel = new AlumnoModel();
	}

	public function registrarAlumno($tipo_documento,  $numero_documento,  $lugar_exp_mun,  $lugar_exp_depto,  $apellido_1,  $apellido_2,  $nombre_1,  $nombre_2,  $fecha_nac,  $lugar_nac_mun,  $lugar_nac_depto,  $genero,  $discapacidad,  $cap_excepcionales, $anexo_documento, $email){

		$validar = $this->validarDatosAlumno($tipo_documento,  $numero_documento,  $lugar_exp_mun,  $lugar_exp_depto,  $apellido_1, $nombre_1, $fecha_nac,  $lugar_nac_mun,  $lugar_nac_depto,  $genero,  $discapacidad,  $cap_excepcionales);

		if($validar == false){
			echo "Datos ingresados no validos";
			return;
		}

		$alumnoDTO = new AlumnoDTO();

		$alumnoDTO->setTipo_documento($tipo_documento);
		$alumnoDTO->setNumero_documento($numero_documento);
		$alumnoDTO->setLugar_exp_mun($lugar_exp_mun);
		$alumnoDTO->setLugar_exp_depto($lugar_exp_depto);
		$alumnoDTO->setApellido_1($apellido_1);
		$alumnoDTO->setApellido_2($apellido_2);
		$alumnoDTO->setNombre_1($nombre_1);
		$alumnoDTO->setNombre_2($nombre_2);
		$alumnoDTO->setFecha_nac($fecha_nac);
		$alumnoDTO->setLugar_nac_mun($lugar_nac_mun);
		$alumnoDTO->setLugar_nac_depto($lugar_nac_depto);
		$alumnoDTO->setGenero($genero);
		$alumnoDTO->setDiscapacidad($discapacidad);
		$alumnoDTO->setCap_excepcionales($cap_excepcionales);
		$alumnoDTO->setAnexo_documento($anexo_documento);
		$alumnoDTO->setEmail($email);
		echo "CREO DTO ir a registroModel";
		$result = $this->alumnoModel->registrarAlumno($alumnoDTO);

	}


	private function validarDatosAlumno( $tipo_documento,  $numero_documento,  $lugar_exp_mun,  $lugar_exp_depto,  $apellido_1,   $nombre_1,   $fecha_nac,  $lugar_nac_mun,  $lugar_nac_depto,  $genero,  $discapacidad,  $cap_excepcionales)
	{

		if($tipo_documento != '' && $numero_documento != '' && $lugar_exp_mun != '' && $lugar_exp_depto != '' && $apellido_1 != '' && $nombre_1 != '' && $fecha_nac != '' && $lugar_nac_mun != '' && $lugar_nac_depto != '' && $genero != '' && $discapacidad != '' && $cap_excepcionales){

				echo "Datos NO vacios (OK)<br>";

			if(is_string($tipo_documento) && is_string($numero_documento) && is_string($lugar_exp_mun) && is_string($lugar_exp_depto) && is_string($apellido_1) &&  is_string($nombre_1) && is_string($lugar_nac_mun) && is_string($lugar_nac_depto) && is_string($genero) && is_string($discapacidad) && is_string($cap_excepcionales)){

				echo "Son de acuerdo al tipo (OK)<br>"; 

				$valores = explode('-', $fecha_nac);
					echo "MES: ".$valores[1]."DIA: ".$valores[2]." AÑO: ".$valores[0]." <br>resultado: ".checkdate($valores[1], $valores[2], $valores[0]);
					if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0])){
							echo "Fecha validad (OK)<br>";
							return true;
	    			}
	    					echo "Fecha No validad (ERROR)<br>";
							return false;

			}
			return false;
		}
		return false;

	}

	public function consultarAlumno($tipo_documento , $numero_documento)
	{
		if(is_string($tipo_documento) && is_string($numero_documento) &&
			$tipo_documento != '' && $numero_documento != ''){
			$alumnoDTO = new AlumnoDTO();
			$alumnoDTO->setTipo_documento($tipo_documento); 
			$alumnoDTO->setNumero_documento($numero_documento);

			return $this->alumnoModel->consultarAlumno($alumnoDTO);
		}
		return "DATOS NO VALIDOS";
	}




}