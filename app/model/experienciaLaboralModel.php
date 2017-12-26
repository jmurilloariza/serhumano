<?php 

require 'app/dao/experienciaLaboralDAO.php';

/**
* 
*/
class ExperienciaLaboralModel{
	
	private $experienciaLaboralDAO;

	function __construct(){
		$this->experienciaLaboralDAO = new ExperienciaLaboralDAO();
	}

	public function registrarExperienciaLaboral($experienciaLaboralDTO){
		return $this->experienciaLaboralDAO->registrarExperienciaLaboral($experienciaLaboralDTO);
	}

	public function listarExperienciasLaboralesTutor($tutorDTO){
	    return $this->experienciaLaboralDAO->listarExperienciasLaboralesTutor($tutorDTO);
    }
}

