<?php 

/**
* 
*/
require_once 'app/core/conexiondb.php';

class MatriculaDAO
{
	
	function __construct()
	{
		
	}

	public function registrarMatriculaDAO($matriculaDTO)
	{
		
		try {
			
		
		$db = DB::getInstance();

		$statement ="INSERT INTO `matricula`( `alumno_id`, `institucion_id`, `tutor_id`, `jornada`, `caracter`, `especialidad`, `grado`, `grupo_curso`, `metodologia`, `subsidiado`, `repitente`, `nie`, `saaa`, `cafaa`, `fuente_recursos`, `zra`, `amcf`, `bvfp`, `bhdmcf`, `bhn`, `pvc`, `ume`, `ude`, `sector_privado`, `pom`, `etnia`, `resguardo`, `ibo`, `sisben`, `direccion_residencia`, `telefono`, `lrm`, `lrd`, `estrato`, `anos_cumplidos`, `fecha_matricula`, `ano_reporte` , `anexo_certif_ante`) 
			VALUES (:alumno_id, :institucion_id, :tutor_id, :jornada, :caracter, :especialidad, :grado, :grupo_curso, :metodologia, :subsidiado, :repitente, :nie, :saaa, :cafaa, :fuente_recursos, :zra, :amcf, :bvfp, :bhdmcf, :bhn, :pvc, :ume, :ude, :sector_privado, :pom, :etnia, :resguardo, :ibo, :sisben, :direccion_residencia, :telefono, :lrm, :lrd, :estrato, :anos_cumplidos, :fecha_matricula, :ano_reporte, :anexo_certif_ante);";

			$prepared = $db->prepare($statement);
			$prepared->execute([
				'alumno_id'=> $matriculaDTO->getAlumno_id(),
				'institucion_id'=>$matriculaDTO->getInstitucion_id(),
				'tutor_id'=>$matriculaDTO->getTutor_id(),
				'jornada'=>$matriculaDTO->getJornada(),
				'caracter'=>$matriculaDTO->getCaracter(),
				'especialidad'=>$matriculaDTO->getEspecialidad(),
				'grado'=>$matriculaDTO->getGrado(),
				'grupo_curso'=>$matriculaDTO->getGrupo_curso(),
				'metodologia'=>$matriculaDTO->getMetodologia(),
				'subsidiado'=> $matriculaDTO->getSubsidiado(),
				'repitente'=> $matriculaDTO->getRepitente(),
				'nie'=> $matriculaDTO->getNie(),
				'saaa'=> $matriculaDTO->getSaaa(),
				'cafaa'=> $matriculaDTO->getCafaa(),
				'fuente_recursos'=> $matriculaDTO->getFuente_recursos(),
				'zra'=> $matriculaDTO->getZra(),
				'amcf'=> $matriculaDTO->getAmcf(),
				'bvfp'=> $matriculaDTO->getBvfp(),
				'bhdmcf'=> $matriculaDTO->getBhdmcf(),
				'bhn'=> $matriculaDTO->getBhn(),
				'pvc'=> $matriculaDTO->getPvc(),
				'ume'=>$matriculaDTO->getUme(),
				'ude'=> $matriculaDTO->getUde(),
				'sector_privado'=> $matriculaDTO->getSector_privado(),
				'pom'=> $matriculaDTO->getPom(),
				'etnia'=> $matriculaDTO->getEtnia(),
				'resguardo'=> $matriculaDTO->getResguardo(),
				'ibo'=> $matriculaDTO->getIbo(),
				'sisben'=>$matriculaDTO->getSisben(),
				'direccion_residencia'=>$matriculaDTO->getDireccion_residencia(),
				'telefono'=>$matriculaDTO->getTelefono(),
				'lrm'=> $matriculaDTO->getLrm(),
				'lrd'=> $matriculaDTO->getLrd(),
				'estrato'=> $matriculaDTO->getEstrato(),
				'anos_cumplidos'=>$matriculaDTO->getAnos_cumplidos(),
				'fecha_matricula'=>$matriculaDTO->getFecha_matricula(), 
				'ano_reporte'=>$matriculaDTO->getAno_reporte(),
				'anexo_certif_ante' =>$matriculaDTO->getAnexo_certif_ante()
			]);
	
			//echo $prepared->debugDumpParams();
			echo "<br>Resultado--> ".$prepared->rowCount();

		} catch (PDOException $e) {
			$e->getMessage();
		}

	
	}


	public function verificarExistenciaMatriculaAlumno($tipo_documento , $numero_documento)
	{
		try {
			
		
		$db = DB::getInstance();
		$jsondata = array();
		//Se tomoa el año del sistema como referencia
		$ano_reporte = date("Y");
		$statement ="SELECT `tipo_documento`, `numero_documento` , `establecimiento_educativo` FROM alumnos JOIN matricula ON (alumnos"."."."alumno_id = matricula"."."."alumno_id) JOIN instituciones ON (matricula.institucion_id = instituciones.institucion_id) WHERE tipo_documento = :tipo_documento AND  numero_documento= :numero_documento AND ano_reporte = :ano_reporte";

			$prepared = $db->prepare($statement);
			$prepared->execute([
				'tipo_documento' => $tipo_documento,
				'numero_documento' => $numero_documento,
				'ano_reporte' => $ano_reporte
			]);
			
			if($prepared->rowCount()>0){
				//Encontro un registro de maticula en una institucion educativa
				$datos = $prepared->fetch(PDO::FETCH_ASSOC);
				
				$jsondata['data'] = "El alumno se encuentra matriculado en la institucion '".$datos['establecimiento_educativo']."'";
				$jsondata['respuesta'] = Respuesta::get(2);
				return $jsondata;
				
			}
			$jsondata['data'] = "No existe matricula asociada al alumno";
			$jsondata['respuesta'] = Respuesta::get(0);
			//var_dump($jsondata);
			return $jsondata;

		} catch (PDOException $e) {
			$jsondata['respuesta'] = Respuesta::get(109);
			$jsondata['data'] = $e->getMessage();
			//var_dump($jsondata);
			return $jsondata;
			
		}
	}
}