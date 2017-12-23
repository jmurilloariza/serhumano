<?php

/**
*  
*/
require_once 'app/model/matriculaModel.php';
require_once 'app/dto/matriculaDTO.php';

class MatriculaController 
{
	
	private $matriculaModel;

	function __construct()
	{
		$this->matriculaModel = new MatriculaModel();
	}

	
	//QUITAR VALORES CONSTANTES (3) y Y DEPENDIENTES A EXCEPCION DE MUNICIPIO Y DEPTO CARACTER ESPECIALIDAD
	public function registrarMatricula($alumno_id, $institucion_id, $tutor_id, $jornada, $grado, $grupo_curso, $subsidiado, $repitente, $nie, $saaa, $cafaa, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplidos, $anexo_certif_ante)
	{ 

		$validar = $this->validarDatosMatricula($alumno_id, $institucion_id, $tutor_id, $jornada, $grado, $grupo_curso, $subsidiado, $repitente, $nie, $saaa, $cafaa, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplidos);

		if($validar == false){
			echo "Datos ingresados no validos";
			return;
		}

		// validacion exitosa
		$matriculaDTO = new MatriculaDTO();

		$matriculaDTO->setAlumno_id($alumno_id);
		$matriculaDTO->setInstitucion_id($institucion_id);
		$matriculaDTO->setTutor_id($tutor_id);
		$matriculaDTO->setJornada($jornada);
		$matriculaDTO->setGrado($grado);
		$matriculaDTO->setGrupo_curso($grupo_curso);
		$matriculaDTO->setSubsidiado($subsidiado);
		$matriculaDTO->setRepitente($repitente);
		$matriculaDTO->setNie($nie);
		$matriculaDTO->setSaaa($saaa);
		$matriculaDTO->setCafaa($cafaa);
		$matriculaDTO->setZra($zra);
		$matriculaDTO->setAmcf($amcf);
		$matriculaDTO->setBvfp($bvfp);
		$matriculaDTO->setBhdmcf($bhdmcf);
		$matriculaDTO->setBhn($bhn);
		$matriculaDTO->setPvc($pvc);
		$matriculaDTO->setUme($ume);
		$matriculaDTO->setUde($ude);
		$matriculaDTO->setSector_privado($sector_privado);
		$matriculaDTO->setPom($pom);
		$matriculaDTO->setEtnia($etnia);
		$matriculaDTO->setResguardo($resguardo);
		$matriculaDTO->setSisben($sisben);
		$matriculaDTO->setDireccion_residencia($direccion_residencia);
		$matriculaDTO->setTelefono($telefono);
		$matriculaDTO->setLrm($lrm);
		$matriculaDTO->setLrd($lrd);
		$matriculaDTO->setEstrato($estrato);
		$matriculaDTO->setAnos_cumplidos($anos_cumplidos);
		$matriculaDTO->setAnexo_certif_ante($anexo_certif_ante);

		$result = $this->matriculaModel->registrarMatricula($matriculaDTO);
		

	}

	private function validarDatosMatricula($alumno_id, $institucion_id, $tutor_id, $jornada, $grado, $grupo_curso, $subsidiado, $repitente, $nie, $saaa, $cafaa, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplidos){


		if($alumno_id != '' && $institucion_id != '' && $tutor_id != '' && $jornada != '' && $grado != '' && $grupo_curso != '' && $subsidiado != '' && $repitente != '' && $nie != '' && $saaa != '' && $cafaa != '' && $zra != '' && $amcf != '' && $bvfp != '' && $bhdmcf != '' && $bhn != '' && $pvc != '' && $ume != '' && $ude != '' && $sector_privado != '' && $pom != '' && $etnia != '' && $resguardo != '' && $sisben != '' && $direccion_residencia != '' && $telefono != '' && $lrm != '' && $lrd != '' && $estrato != '' && $anos_cumplidos != '' ){

				echo "Datos NO vacios (OK)<br>";
			if( is_numeric($alumno_id) && is_numeric($institucion_id) && is_numeric($tutor_id) && is_string($jornada) && is_string($grado) && is_string($grupo_curso) && is_string($subsidiado) && is_string($repitente) && is_string($nie) && is_string($saaa) && is_string($cafaa) && is_string($zra) && is_string($amcf) && is_string($bvfp) && is_string($bhdmcf) && is_string($bhn) && is_string($pvc) && is_string($ume) && is_string($ude) && is_string($sector_privado) && is_string($pom) && is_string($etnia) && is_string($resguardo) && is_string($sisben) && is_string($direccion_residencia) && is_string($telefono) && is_string($lrm) && is_string($lrd) && is_string($estrato) && is_string($anos_cumplidos)){

					echo "Son de acuerdo al tipo (OK)<br>";
					
					/*
					$valores = explode('-', $fecha_matricula);
					echo "MES: ".$valores[1]."DIA: ".$valores[2]." AÑO: ".$valores[0]." <br>resultado: ".checkdate($valores[1], $valores[2], $valores[0]);
					if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0])){
							echo "Fecha validad (OK)<br>";
							return true;
	    			}
	    					echo "Fecha No validad (ERROR)<br>";
							return false;
							*/
							return true;
			}

			return false;
		}
		return false;
	}

	


	public function consultarMatricula()
	{

	}

	
}
