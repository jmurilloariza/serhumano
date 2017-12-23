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
}