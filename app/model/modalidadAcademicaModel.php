<?php 

require_once 'app/dao/modalidadAcademicaDAO.php';

class ModalidadAcademicaModel {
	
	private $modalidadAcademicaDAO;

	public function __construct(){
		$this->modalidadAcademicaDAO = new ModalidadAcademicaDAO();
	}

	public function registrarModalidadAcademica($modalidadAcademicaDTO){
		return json_encode($this->modalidadAcademicaDAO->registrarModalidadAcademica($modalidadAcademicaDTO));
	}

	public function listarModalidadesAcademicas(){
	    return json_encode($this->modalidadAcademicaDAO->listarModalidadesAcademicas());
    }

}

 ?>