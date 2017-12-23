<?php 

/**
* 
*/
class EducacionSuperiorDTO{
	
	private $educacion_superior_id;
	private $modalidad_academica_id;
	private $tutor;
	private $numero_semest_aprob;
	private $graduado;
	private $estudio_titulo_obte;
	private $fecha_terminacion;
	private $num_tarjeta_prof;

    /**
     * @return mixed
     */
    public function getEducacionSuperiorId()
    {
        return $this->educacion_superior_id;
    }

    /**
     * @param mixed $educacion_superior_id
     *
     * @return self
     */
    public function setEducacionSuperiorId($educacion_superior_id)
    {
        $this->educacion_superior_id = $educacion_superior_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModalidadAcademicaId()
    {
        return $this->modalidad_academica_id;
    }

    /**
     * @param mixed $modalidad_academica_id
     *
     * @return self
     */
    public function setModalidadAcademicaId($modalidad_academica_id)
    {
        $this->modalidad_academica_id = $modalidad_academica_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTutor()
    {
        return $this->tutor;
    }

    /**
     * @param mixed $tutor
     *
     * @return self
     */
    public function setTutor($tutor)
    {
        $this->tutor = $tutor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroSemestAprob()
    {
        return $this->numero_semest_aprob;
    }

    /**
     * @param mixed $numero_semest_aprob
     *
     * @return self
     */
    public function setNumeroSemestAprob($numero_semest_aprob)
    {
        $this->numero_semest_aprob = $numero_semest_aprob;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGraduado()
    {
        return $this->graduado;
    }

    /**
     * @param mixed $graduado
     *
     * @return self
     */
    public function setGraduado($graduado)
    {
        $this->graduado = $graduado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstudioTituloObte()
    {
        return $this->estudio_titulo_obte;
    }

    /**
     * @param mixed $estudio_titulo_obte
     *
     * @return self
     */
    public function setEstudioTituloObte($estudio_titulo_obte)
    {
        $this->estudio_titulo_obte = $estudio_titulo_obte;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaTerminacion()
    {
        return $this->fecha_terminacion;
    }

    /**
     * @param mixed $fecha_terminacion
     *
     * @return self
     */
    public function setFechaTerminacion($fecha_terminacion)
    {
        $this->fecha_terminacion = $fecha_terminacion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumTarjetaProf()
    {
        return $this->num_tarjeta_prof;
    }

    /**
     * @param mixed $num_tarjeta_prof
     *
     * @return self
     */
    public function setNumTarjetaProf($num_tarjeta_prof)
    {
        $this->num_tarjeta_prof = $num_tarjeta_prof;

        return $this;
    }
}

 ?>