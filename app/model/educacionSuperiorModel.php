<?php 

require 'app/dao/educacionSuperiorDAO.php';

/**
* 
*/
class EducacionSuperiorModel{
	
	private $educacionSuperiorDAO;

	function __construct(){
		$this->educacionSuperiorDAO = new EducacionSuperiorDAO();
	}

	public function registrarEducacionSuperior($educacionSuperiorDTO){
		return $this->educacionSuperiorDAO->registrarEducacionSuperior($educacionSuperiorDTO);
	}

	public function listarEstudiosSuperioresTutor($tutorDTO){
	    return $this->educacionSuperiorDAO->listarEstudiosSuperioresTutor($tutorDTO);
    }
}

 ?>