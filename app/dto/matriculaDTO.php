<?php 

/**
*  
*/
	class MatriculaDTO {

		private $alumno_id;
		private $institucion_id;
		private $jornada;
		private $caracter;
		private $especialidad;
		private $grado;
		private $grupo_curso;
		private $metodologia;
		private $subsidiado;
		private $repitente;
		private $nie; 
		private $saaa;
		private $cafaa;
		private $fuente_recursos; 
		private $zra;
		private $amcf;
		private $bvfp; 
		private $bhdmcf;
		private $bhn; 
		private $pvc; 
		private $ume;
		private $ude; 
		private $sector_privado;
		private $pom;
		private $etnia;
		private $resguardo;
		private $ibo;
		private $sisben;
		private $direccion_residencia;
		private $telefono;
		private $lrm;
		private $lrd; 
		private $estrato;
		private $anos_cumplidos;
		private $fecha_matricula;
		private $matricula_id;
        private $ano_reporte;

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
    public function getInstitucionId()
    {
        return $this->institucion_id;
    }

    /**
     * @param mixed $institucion_id
     *
     * @return self
     */
    public function setInstitucionId($institucion_id)
    {
        $this->institucion_id = $institucion_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * @param mixed $jornada
     *
     * @return self
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaracter()
    {
        return $this->caracter;
    }

    /**
     * @param mixed $caracter
     *
     * @return self
     */
    public function setCaracter($caracter)
    {
        $this->caracter = $caracter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * @param mixed $especialidad
     *
     * @return self
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * @param mixed $grado
     *
     * @return self
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGrupoCurso()
    {
        return $this->grupo_curso;
    }

    /**
     * @param mixed $grupo_curso
     *
     * @return self
     */
    public function setGrupoCurso($grupo_curso)
    {
        $this->grupo_curso = $grupo_curso;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetodologia()
    {
        return $this->metodologia;
    }

    /**
     * @param mixed $metodologia
     *
     * @return self
     */
    public function setMetodologia($metodologia)
    {
        $this->metodologia = $metodologia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubsidiado()
    {
        return $this->subsidiado;
    }

    /**
     * @param mixed $subsidiado
     *
     * @return self
     */
    public function setSubsidiado($subsidiado)
    {
        $this->subsidiado = $subsidiado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRepitente()
    {
        return $this->repitente;
    }

    /**
     * @param mixed $repitente
     *
     * @return self
     */
    public function setRepitente($repitente)
    {
        $this->repitente = $repitente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNie()
    {
        return $this->nie;
    }

    /**
     * @param mixed $nie
     *
     * @return self
     */
    public function setNie($nie)
    {
        $this->nie = $nie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaaa()
    {
        return $this->saaa;
    }

    /**
     * @param mixed $saaa
     *
     * @return self
     */
    public function setSaaa($saaa)
    {
        $this->saaa = $saaa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCafaa()
    {
        return $this->cafaa;
    }

    /**
     * @param mixed $cafaa
     *
     * @return self
     */
    public function setCafaa($cafaa)
    {
        $this->cafaa = $cafaa;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFuenteRecursos()
    {
        return $this->fuente_recursos;
    }

    /**
     * @param mixed $fuente_recursos
     *
     * @return self
     */
    public function setFuenteRecursos($fuente_recursos)
    {
        $this->fuente_recursos = $fuente_recursos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZra()
    {
        return $this->zra;
    }

    /**
     * @param mixed $zra
     *
     * @return self
     */
    public function setZra($zra)
    {
        $this->zra = $zra;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmcf()
    {
        return $this->amcf;
    }

    /**
     * @param mixed $amcf
     *
     * @return self
     */
    public function setAmcf($amcf)
    {
        $this->amcf = $amcf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBvfp()
    {
        return $this->bvfp;
    }

    /**
     * @param mixed $bvfp
     *
     * @return self
     */
    public function setBvfp($bvfp)
    {
        $this->bvfp = $bvfp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBhdmcf()
    {
        return $this->bhdmcf;
    }

    /**
     * @param mixed $bhdmcf
     *
     * @return self
     */
    public function setBhdmcf($bhdmcf)
    {
        $this->bhdmcf = $bhdmcf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBhn()
    {
        return $this->bhn;
    }

    /**
     * @param mixed $bhn
     *
     * @return self
     */
    public function setBhn($bhn)
    {
        $this->bhn = $bhn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPvc()
    {
        return $this->pvc;
    }

    /**
     * @param mixed $pvc
     *
     * @return self
     */
    public function setPvc($pvc)
    {
        $this->pvc = $pvc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUme()
    {
        return $this->ume;
    }

    /**
     * @param mixed $ume
     *
     * @return self
     */
    public function setUme($ume)
    {
        $this->ume = $ume;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUde()
    {
        return $this->ude;
    }

    /**
     * @param mixed $ude
     *
     * @return self
     */
    public function setUde($ude)
    {
        $this->ude = $ude;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSectorPrivado()
    {
        return $this->sector_privado;
    }

    /**
     * @param mixed $sector_privado
     *
     * @return self
     */
    public function setSectorPrivado($sector_privado)
    {
        $this->sector_privado = $sector_privado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPom()
    {
        return $this->pom;
    }

    /**
     * @param mixed $pom
     *
     * @return self
     */
    public function setPom($pom)
    {
        $this->pom = $pom;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEtnia()
    {
        return $this->etnia;
    }

    /**
     * @param mixed $etnia
     *
     * @return self
     */
    public function setEtnia($etnia)
    {
        $this->etnia = $etnia;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResguardo()
    {
        return $this->resguardo;
    }

    /**
     * @param mixed $resguardo
     *
     * @return self
     */
    public function setResguardo($resguardo)
    {
        $this->resguardo = $resguardo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIbo()
    {
        return $this->ibo;
    }

    /**
     * @param mixed $ibo
     *
     * @return self
     */
    public function setIbo($ibo)
    {
        $this->ibo = $ibo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSisben()
    {
        return $this->sisben;
    }

    /**
     * @param mixed $sisben
     *
     * @return self
     */
    public function setSisben($sisben)
    {
        $this->sisben = $sisben;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccionResidencia()
    {
        return $this->direccion_residencia;
    }

    /**
     * @param mixed $direccion_residencia
     *
     * @return self
     */
    public function setDireccionResidencia($direccion_residencia)
    {
        $this->direccion_residencia = $direccion_residencia;

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
    public function getLrm()
    {
        return $this->lrm;
    }

    /**
     * @param mixed $lrm
     *
     * @return self
     */
    public function setLrm($lrm)
    {
        $this->lrm = $lrm;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLrd()
    {
        return $this->lrd;
    }

    /**
     * @param mixed $lrd
     *
     * @return self
     */
    public function setLrd($lrd)
    {
        $this->lrd = $lrd;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstrato()
    {
        return $this->estrato;
    }

    /**
     * @param mixed $estrato
     *
     * @return self
     */
    public function setEstrato($estrato)
    {
        $this->estrato = $estrato;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnosCumplidos()
    {
        return $this->anos_cumplidos;
    }

    /**
     * @param mixed $anos_cumplidos
     *
     * @return self
     */
    public function setAnosCumplidos($anos_cumplidos)
    {
        $this->anos_cumplidos = $anos_cumplidos;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaMatricula()
    {
        return $this->fecha_matricula;
    }

    /**
     * @param mixed $fecha_matricula
     *
     * @return self
     */
    public function setFechaMatricula($fecha_matricula)
    {
        $this->fecha_matricula = $fecha_matricula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMatriculaId()
    {
        return $this->matricula_id;
    }

    /**
     * @param mixed $matricula_id
     *
     * @return self
     */
    public function setMatriculaId($matricula_id)
    {
        $this->matricula_id = $matricula_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnoReporte()
    {
        return $this->ano_reporte;
    }

    /**
     * @param mixed $ano_reporte
     *
     * @return self
     */
    public function setAnoReporte($ano_reporte)
    {
        $this->ano_reporte = $ano_reporte;

        return $this;
    }
}

 ?>