<?php

require 'app/dao/tutorDAO.php';

/**
 *
 */
class ModelTutor{

    private $tutorDAO;

    function __construct(){
        $this->tutorDAO = new TutorDAO();
    }

    public function registrarTutor($tutorDTO){
        return $this->tutorDAO->registrarTutor($tutorDTO);
    }
}

