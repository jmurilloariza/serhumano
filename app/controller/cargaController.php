<?php 

/**
* 
*/
require_once 'app/model/cargaModel.php';
class CargaController 
{
	private $cargaModel;
	
	function __construct()
	{
		$this->cargaModel = new CargaModel();
	}

	public function listarDepartamentos()
	{
		return $this->cargaModel->listarDepartamentos();
	}

	public function listarMunicipios()
	{
		return $this->cargaModel->listarMunicipios();
	}
	

}

 ?>