<?php 

/**
* 
*/
class AlumnoDTO {

  private $alumno_id;
  private $tipo_documento;
  private $numero_documento;
  private $lugar_exp_mun;
  private $apellido_1;
  private $apellido_2;
  private $nombre_1;
  private $nombre_2;
  private $fecha_nac;
  private $lugar_nac_mun;
  private $lugar_nac_depto;
  private $genero;
  private $discapacidad;
  private $cap_excepcionales;
  
  function __construct()
  {
    # code...
  }

    /**
     * @return mixed
     */
    public function getAlumnoId()
    {
        return $this->alumno_id;
    }

    /**
     * @param mixed $alumno_id
     *
     * @return self
     */
    public function setAlumnoId($alumno_id)
    {
        $this->alumno_id = $alumno_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * @param mixed $tipo_documento
     *
     * @return self
     */
    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumeroDocumento()
    {
        return $this->numero_documento;
    }

    /**
     * @param mixed $numero_documento
     *
     * @return self
     */
    public function setNumeroDocumento($numero_documento)
    {
        $this->numero_documento = $numero_documento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugarExpMun()
    {
        return $this->lugar_exp_mun;
    }

    /**
     * @param mixed $lugar_exp_mun
     *
     * @return self
     */
    public function setLugarExpMun($lugar_exp_mun)
    {
        $this->lugar_exp_mun = $lugar_exp_mun;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido_1;
    }

    /**
     * @param mixed $apellido_1
     *
     * @return self
     */
    public function setApellido1($apellido_1)
    {
        $this->apellido_1 = $apellido_1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido_2;
    }

    /**
     * @param mixed $apellido_2
     *
     * @return self
     */
    public function setApellido2($apellido_2)
    {
        $this->apellido_2 = $apellido_2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre1()
    {
        return $this->nombre_1;
    }

    /**
     * @param mixed $nombre_1
     *
     * @return self
     */
    public function setNombre1($nombre_1)
    {
        $this->nombre_1 = $nombre_1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre2()
    {
        return $this->nombre_2;
    }

    /**
     * @param mixed $nombre_2
     *
     * @return self
     */
    public function setNombre2($nombre_2)
    {
        $this->nombre_2 = $nombre_2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    /**
     * @param mixed $fecha_nac
     *
     * @return self
     */
    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugarNacMun()
    {
        return $this->lugar_nac_mun;
    }

    /**
     * @param mixed $lugar_nac_mun
     *
     * @return self
     */
    public function setLugarNacMun($lugar_nac_mun)
    {
        $this->lugar_nac_mun = $lugar_nac_mun;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLugarNacDepto()
    {
        return $this->lugar_nac_depto;
    }

    /**
     * @param mixed $lugar_nac_depto
     *
     * @return self
     */
    public function setLugarNacDepto($lugar_nac_depto)
    {
        $this->lugar_nac_depto = $lugar_nac_depto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscapacidad()
    {
        return $this->discapacidad;
    }

    /**
     * @param mixed $discapacidad
     *
     * @return self
     */
    public function setDiscapacidad($discapacidad)
    {
        $this->discapacidad = $discapacidad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapExcepcionales()
    {
        return $this->cap_excepcionales;
    }

    /**
     * @param mixed $cap_excepcionales
     *
     * @return self
     */
    public function setCapExcepcionales($cap_excepcionales)
    {
        $this->cap_excepcionales = $cap_excepcionales;

        return $this;
    }
}

 ?>