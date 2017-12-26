<?php

require 'app/dao/tutorDAO.php';

/**
 *
 */
class ModelTutor{

    private $tutorDAO;

    function __construct(){
        $this->tutorDAO = new tutorDAO();
    }

    public function registrarTutor($tutorDTO){
        return $this->tutorDAO->registrarTutor($tutorDTO);
    }

    public function listarTutores(){
    	return $this->tutorDAO->listarTutores();
    }

    public function obtenerDatosTutor($tutorDTO){
    	return $this->tutorDAO->obtenerDatosTutor($tutorDTO);
    }

}

