<?php
/**
 */

class ExperienciaLaboralDTO {

    private $experiencia_id;
    private $tutor;
    private $empresa_entidad;
    private $tipo;
    private $pais;
    private $departamento;
    private $municipio;
    private $correo_entidad;
    private $telefono;
    private $fecha_ingreso;
    private $fecha_retiro;
    private $cargo_contratado;
    private $dependencia;
    private $direccion;
    private $estado_contrato;

    public function __construct(){

    }

    /**
     * @return mixed
     */
    public function getExperienciaId()
    {
        return $this->experiencia_id;
    }

    /**
     * @param mixed $experiencia_id
     *
     * @return self
     */
    public function setExperienciaId($experiencia_id)
    {
        $this->experiencia_id = $experiencia_id;

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
    public function getEmpresaEntidad()
    {
        return $this->empresa_entidad;
    }

    /**
     * @param mixed $empresa_entidad
     *
     * @return self
     */
    public function setEmpresaEntidad($empresa_entidad)
    {
        $this->empresa_entidad = $empresa_entidad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     *
     * @return self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * @param mixed $departamento
     *
     * @return self
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     *
     * @return self
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreoEntidad()
    {
        return $this->correo_entidad;
    }

    /**
     * @param mixed $correo_entidad
     *
     * @return self
     */
    public function setCorreoEntidad($correo_entidad)
    {
        $this->correo_entidad = $correo_entidad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaIngreso()
    {
        return $this->fecha_ingreso;
    }

    /**
     * @param mixed $fecha_ingreso
     *
     * @return self
     */
    public function setFechaIngreso($fecha_ingreso)
    {
        $this->fecha_ingreso = $fecha_ingreso;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaRetiro()
    {
        return $this->fecha_retiro;
    }

    /**
     * @param mixed $fecha_retiro
     *
     * @return self
     */
    public function setFechaRetiro($fecha_retiro)
    {
        $this->fecha_retiro = $fecha_retiro;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCargoContratado()
    {
        return $this->cargo_contratado;
    }

    /**
     * @param mixed $cargo_contratado
     *
     * @return self
     */
    public function setCargoContratado($cargo_contratado)
    {
        $this->cargo_contratado = $cargo_contratado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * @param mixed $dependencia
     *
     * @return self
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstadoContrato()
    {
        return $this->estado_contrato;
    }

    /**
     * @param mixed $estado_contrato
     *
     * @return self
     */
    public function setEstadoContrato($estado_contrato)
    {
        $this->estado_contrato = $estado_contrato;

        return $this;
    }
}