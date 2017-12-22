<?php 

/**
* 
*/
require_once 'app/dto/matriculaDTO';
require_once 'app/dao/matriculaDAO';
class MatriculaModel 
{

	private $matriculaDAO;
	
	function __construct()
	{
		$this->$matriculaDAO = new MatriculaDAO;
	}


	public function registrarMatricula($matriculaDTO)
	{
		$this->$matriculaDAO->registrarMatriculaDAO($matriculaDTO);
	}


}