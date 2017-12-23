<?php 

/**
* 
*/
require_once 'app/dto/matriculaDTO.php';
require_once 'app/dao/matriculaDAO.php';
class MatriculaModel 
{

	private $matriculaDAO;
	
	function __construct()
	{
		$this->matriculaDAO = new MatriculaDAO();
	}


	public function registrarMatricula($matriculaDTO)
	{	
		//agregar valores constantes
		$matriculaDTO = $this->agregarConstantes($matriculaDTO);
		//agregar valores a los atributos dependientes
		$matriculaDTO = $this->agrgarDatosDependientes($matriculaDTO);

		if($matriculaDTO == null){
			//Valor no permitidos en atributo dependiente (grado)
			echo "Valor no permitidos en atributo dependiente (grado)";
			return null;
		}
		//proceder con el registro
		return $this->matriculaDAO->registrarMatriculaDAO($matriculaDTO);
	}

	/*
	*Metodo para agregar valores contantes al DTO de matricula
	*/
	private function agregarConstantes($matriculaDTO)
	{
		$matriculaDTO->setIbo('NO APLICA');
		$matriculaDTO->setMetodologia('10');
		$matriculaDTO->setFuente_recursos('1');
		$matriculaDTO->setFecha_matricula(date("Y-m-d"));
		$matriculaDTO->setAno_reporte(date("Y"));
		return $matriculaDTO;

	}

	/*
	*Metodo para agregar valores dependientes al DTO de matricula
	*/
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

	public function verificarExistenciaMatriculaAlumno($tipo_documento , $numero_documento )
	{
		return $this->matriculaDAO->verificarExistenciaMatriculaAlumno($tipo_documento , $numero_documento) ;
	}


	

	

}