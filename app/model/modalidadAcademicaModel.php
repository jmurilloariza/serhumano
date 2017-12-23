<?php 

require 'app/dao/modalidadAcademicaDAO.php';

/**
* 
*/
class ModalidadAcademicaModel{
	
	private $modalidadAcademicaDAO;

	function __construct(){
		$this->modalidadAcademicaDAO = new ModalidadAcademicaDAO();
	}

	public function registrarModalidadAcademica($modalidadAcademicaDTO){
		return $this->modalidadAcademicaDAO->registrarModalidadAcademica($modalidadAcademicaDTO);
	}

}

 ?>