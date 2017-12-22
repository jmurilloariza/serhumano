<?php

/**
*  
*/
require_once 'app/model/matriculaModel';
require_once 'app/dto/matriculaDTO';

class MatriculaController extends 
{
	
	private $matriculaModel;

	function __construct()
	{
		$matriculaModel = new MatriculaModel();
	}

	public function registrarMatricula(
		$alumno_id, $institucion_id, $jornada, $caracter, $especialidad, $grado, $grupo_curso, $metodologia, $subsidiado, $repitente, $nie, $saaa, $cafaa, $fuente_recursos, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $ibo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplido, $fecha_matricula, $ano_reporte)
	{


		$validar = validarDatos($alumno_id, $institucion_id, $jornada, $caracter, $especialidad, $grado, $grupo_curso, $metodologia, $subsidiado, $repitente, $nie, $saaa, $cafaa, $fuente_recursos, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $ibo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplido, $fecha_matricula, $ano_reporte);
		if($validar == false){
			echo "Datos ingresados no validos";
		}

		// validacion exitosa
		$matriculaDTO = new MatriculaDTO();

		$matriculaDTO->setAlumno_id($alumno_id);
		$matriculaDTO->setInstitucion_id($institucion_id);
		$matriculaDTO->setJornada($jornada);
		$matriculaDTO->setCaracter($caracter);
		$matriculaDTO->setEspecialidad($especialidad);
		$matriculaDTO->setGrado($grado);
		$matriculaDTO->setGrupo_curso($grupo_curso);
		//$matriculaDTO->setMetodologia($metodologia);
		$matriculaDTO->setSubsidiado($subsidiado);
		$matriculaDTO->setRepitente($repitente);
		$matriculaDTO->setNie($nie);
		$matriculaDTO->setSaaa($saaa);
		$matriculaDTO->setCafaa($cafaa);
		//$matriculaDTO->setFuente_recursos($fuente_recursos);
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
		//$matriculaDTO->setIbo($ibo);
		$matriculaDTO->setSisben($sisben);
		$matriculaDTO->setDireccion_residencia($direccion_residencia);
		$matriculaDTO->setTelefono($telefono);
		$matriculaDTO->setLrm($lrm);
		$matriculaDTO->setLrd($lrd);
		$matriculaDTO->setEstrato($estrato);
		$matriculaDTO->setAnos_cumplidos($anos_cumplidos);
		$matriculaDTO->setFecha_matricula($fecha_matricula)
		$matriculaDTO->setMatricula_id($matricula_id);
		$matriculaDTO->setAno_reporte($ano_reporte);
		
		$matriculaDTO = $this->agregarConstantes($matriculaDTO);
		$matriculaDTO = $this->agrgarDatosDependientes($matriculaDTO);
		if($matriculaDTO == null){
			echo "Error en datos dependientes";
			return;
		}

		$this->matriculaModel->registrarMatricula($matriculaDTO);

	}

	private function validarDatos($alumno_id, $institucion_id, $jornada, $caracter, $especialidad, $grado, $grupo_curso, $metodologia, $subsidiado, $repitente, $nie, $saaa, $cafaa, $fuente_recursos, $zra, $amcf, $bvfp, $bhdmcf, $bhn, $pvc, $ume, $ude, $sector_privado, $pom, $etnia, $resguardo, $ibo, $sisben, $direccion_residencia, $telefono, $lrm, $lrd, $estrato, $anos_cumplido, $fecha_matricula, $ano_reporte){

		if($alumno_id != '' && $institucion_id != '' && $jornada != '' && $caracter != '' && $especialidad != '' && $grado != '' && $grupo_curso != '' && $metodologia != '' && $subsidiado != '' && $repitente != '' && $nie != '' && $saaa != '' && $cafaa != '' && $fuente_recursos != '' && $zra != '' && $amcf != '' && $bvfp != '' && $bhdmcf != '' && $bhn != '' && $pvc != '' && $ume != '' && $ude != '' && $sector_privado != '' && $pom != '' && $etnia != '' && $resguardo != '' && $ibo != '' && $sisben != '' && $direccion_residencia != '' && $telefono != '' && $lrm != '' && $lrd != '' && $estrato != '' && $anos_cumplido != '' && $fecha_matricula != '' && $ano_reporte){

			if( is_numeric($alumno_id) && is_numeric($institucion_id) && is_string($jornada) && is_string($caracter) && is_string($especialidad) && is_string($grado) && is_string($grupo_curso) && is_string($metodologia) && is_string($subsidiado) && is_string($repitente) && is_string($nie) && is_string($saaa) && is_string($cafaa) && is_string($fuente_recursos) && is_string($zra) && is_string($amcf) && is_string($bvfp) && is_string($bhdmcf) && is_string($bhn) && is_string($pvc) && is_string($ume) && is_string($ude) && is_string($sector_privado) && is_string($pom) && is_string($etnia) && is_string($resguardo) && is_string($ibo) && is_string($sisben) && is_string($direccion_residencia) && is_string($telefono) && is_string($lrm) && is_string($lrd) && is_string($estrato) && is_string($anos_cumplido) && is_string($ano_reporte){

					$valores = explode('/', $fecha_matricula);
					if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
							return true;
	    			}
							return false;

			}

			return false;
		}
		return false;
	}

	private function agrgarDatosDependientes($matriculaDTO)
	{
		if($matriculaDTO->getPvc()=='2' || $matriculaDTO->getPvc()=='3' || $matriculaDTO->getPvc()=='9'){
				$matriculaDTO->setUme('N');
				$matriculaDTO->setUde('N');
		}

		if($matriculaDTO->getGrado()=='22' || $matriculaDTO->getGrado()=='23' || $matriculaDTO->getGrado()=='24'){

			$matriculaDTO->setCaracter('0');
			$matriculaDTO->setEspecialidad('00');

		}else if($matriculaDTO->getGrado()=='25' || $matriculaDTO->getGrado()=='26'){

			$matriculaDTO->setCaracter('1');
			$matriculaDTO->setEspecialidad('05');

		}else{
			return null;
		}
		return $matriculaDTO;
		
	}

	private function agregarConstantes($matriculaDTO)
	{
		$matriculaDTO->setIbo('NO APLICA');
		$matriculaDTO->setMetodologia('10');
		$matriculaDTO->setFuente_recursos('1');
		return $matriculaDTO;

	}
}
