<?php 

/**
* 
*/
require_once 'app/dao/cargaDAO.php';
class CargaModel
{
	
	private $cargaDAO;

	function __construct()
	{
		$this->cargaDAO = new CargaDAO();
	}

	public function listarDepartamentos()
	{
		return $this->cargaDAO->listarDepartamentos();
	}


	public function listarMunicipios()
	{
		return $this->cargaDAO->listarMunicipios();
	}


	


}
 ?>