<?php 

/**
* 
*/
require_once 'app/dto/alumnoDTO.php';
require_once 'app/dao/alumnoDAO.php';

class AlumnoModel
{
	
	private $alumnoDAO;

	function __construct()
	{
		$this->alumnoDAO = new AlumnoDAO();
	}


	public function registrarAlumno($alumnoDTO)
	{
		return $this->alumnoDAO->registrarAlumnoDAO($alumnoDTO);

	}

	public function consultarAlumno($alumnoDTO)
	{
			return $this->alumnoDAO->consultarAlumno($alumnoDTO);
		
	}
}
