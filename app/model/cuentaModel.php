<?php

/**
*  
*/
require_once 'app/dao/cuentaDAO.php';
require_once 'app/dto/cuentaDTO.php';

class CuentaModel
{
	
	private $cuentaDAO;

	function __construct()
	{
		$this->cuentaDAO = new CuentaDAO();
	}

	public function registrarCuenta($cuentaDTO)
	{
		return $this->cuentaDAO->registrarCuenta($cuentaDTO);
	}

	public function iniciarSesion($cuentaDTO)
	{
		return $this->cuentaDAO->iniciarSesion($cuentaDTO);
	}

	 public function obtenerModulos($email)
    {
    	return  $this->cuentaDAO->obtenerModulos($email);
    }
	
}

  ?>