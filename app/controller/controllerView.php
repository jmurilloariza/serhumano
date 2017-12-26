<?php

require 'app/model/modalidadAcademicaModel.php';

/**
* 
*/
class ControllerView{

	private $folderViews;
	private $modalidadAcademicaModel;
	
	function __construct(){
		$this->folderViews = 'public/';
		$this->modalidadAcademicaModel = new ModalidadAcademicaModel();
	}

	function getView ($fileView) {
		if(file_exists($this->folderViews.$fileView)) {
			return file_get_contents($this->folderViews.$fileView);
		}
		return false;
	}

	private function insert($archivo, $clave, $reemplazo) {
		return str_replace($clave, $reemplazo, $archivo);
	}

	function showView ($fileName) {
		$view = $this->getView($fileName);
		return $view;
	}

	function render($fileName, $modulos){
		$view = $this->getView($fileName);
		$modules = '';
		$quickAccess = '';

		foreach ($modulos as $module) {
			$modules .= $this->getView($module['modulo']);
			if($module['ar'] == true){
				$quickAccess .= $this->getView($module['modulo']);
			}
		}

		$view = $this->insert($view, '{{modulo}}', $modules);
		$view = $this->insert($view, '{{header}}', $quickAccess);
		return $view;
	}

	public function listarModalidadesAcademicas(){
	    return $this->modalidadAcademicaModel->listarModalidadesAcademicas();
    }



}

 ?>