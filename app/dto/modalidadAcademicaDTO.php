<?php 

/**
* 
*/
class ModalidadAcademicaDTO{
	
	private $modalidad_id;
	private $modalidad;

	function __construct(){

	}

    /**
     * @return mixed
     */
    public function getModalidadId()
    {
        return $this->modalidad_id;
    }

    /**
     * @param mixed $modalidad_id
     *
     * @return self
     */
    public function setModalidadId($modalidad_id)
    {
        $this->modalidad_id = $modalidad_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModalidad()
    {
        return $this->modalidad;
    }

    /**
     * @param mixed $modalidad
     *
     * @return self
     */
    public function setModalidad($modalidad)
    {
        $this->modalidad = $modalidad;

        return $this;
    }
}

 ?>