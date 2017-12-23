<?php 

/**
*  
*/
    class MatriculaDTO {

        private $alumno_id;
        private $institucion_id;
        private $tutor_id;
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
        private $anexo_certif_ante;

        function __construct()
        {
        }
            # code...
        function getAlumno_id() {
            return $this->alumno_id;
        }

        function getInstitucion_id() {
            return $this->institucion_id;
        }

        function getTutor_id() {
            return $this->tutor_id;
        }

        function getJornada() {
            return $this->jornada;
        }

        function getCaracter() {
            return $this->caracter;
        }

        function getEspecialidad() {
            return $this->especialidad;
        }

        function getGrado() {
            return $this->grado;
        }

        function getGrupo_curso() {
            return $this->grupo_curso;
        }

        function getMetodologia() {
            return $this->metodologia;
        }

        function getSubsidiado() {
            return $this->subsidiado;
        }

        function getRepitente() {
            return $this->repitente;
        }

        function getNie() {
            return $this->nie;
        }

        function getSaaa() {
            return $this->saaa;
        }

        function getCafaa() {
            return $this->cafaa;
        }

        function getFuente_recursos() {
            return $this->fuente_recursos;
        }

        function getZra() {
            return $this->zra;
        }

        function getAmcf() {
            return $this->amcf;
        }

        function getBvfp() {
            return $this->bvfp;
        }

        function getBhdmcf() {
            return $this->bhdmcf;
        }

        function getBhn() {
            return $this->bhn;
        }

        function getPvc() {
            return $this->pvc;
        }

        function getUme() {
            return $this->ume;
        }

        function getUde() {
            return $this->ude;
        }

        function getSector_privado() {
            return $this->sector_privado;
        }

        function getPom() {
            return $this->pom;
        }

        function getEtnia() {
            return $this->etnia;
        }

        function getResguardo() {
            return $this->resguardo;
        }

        function getIbo() {
            return $this->ibo;
        }

        function getSisben() {
            return $this->sisben;
        }

        function getDireccion_residencia() {
            return $this->direccion_residencia;
        }

        function getTelefono() {
            return $this->telefono;
        }

        function getLrm() {
            return $this->lrm;
        }

        function getLrd() {
            return $this->lrd;
        }

        function getEstrato() {
            return $this->estrato;
        }

        function getAnos_cumplidos() {
            return $this->anos_cumplidos;
        }

        function getFecha_matricula() {
            return $this->fecha_matricula;
        }

        function getMatricula_id() {
            return $this->matricula_id;
        }
        
        function getAno_reporte() {
            return $this->ano_reporte;
        }

        function getAnexo_certif_ante() {
            return $this->anexo_certif_ante;
        }

        function setAlumno_id($alumno_id) {
            $this->alumno_id = $alumno_id;
        }

        function setInstitucion_id($institucion_id) {
            $this->institucion_id = $institucion_id;
        }

        function setTutor_id($tutor_id) {
            $this->tutor_id = $tutor_id;
        }

        function setJornada($jornada) {
            $this->jornada = $jornada;
        }

        function setCaracter($caracter) {
            $this->caracter = $caracter;
        }

        function setEspecialidad($especialidad) {
            $this->especialidad = $especialidad;
        }

        function setGrado($grado) {
            $this->grado = $grado;
        }

        function setGrupo_curso($grupo_curso) {
            $this->grupo_curso = $grupo_curso;
        }

        function setMetodologia($metodologia) {
            $this->metodologia = $metodologia;
        }

        function setSubsidiado($subsidiado) {
            $this->subsidiado = $subsidiado;
        }

        function setRepitente($repitente) {
            $this->repitente = $repitente;
        }

        function setNie($nie) {
            $this->nie = $nie;
        }

        function setSaaa($saaa) {
            $this->saaa = $saaa;
        }

        function setCafaa($cafaa) {
            $this->cafaa = $cafaa;
        }

        function setFuente_recursos($fuente_recursos) {
            $this->fuente_recursos = $fuente_recursos;
        }

        function setZra($zra) {
            $this->zra = $zra;
        }

        function setAmcf($amcf) {
            $this->amcf = $amcf;
        }

        function setBvfp($bvfp) {
            $this->bvfp = $bvfp;
        }

        function setBhdmcf($bhdmcf) {
            $this->bhdmcf = $bhdmcf;
        }

        function setBhn($bhn) {
            $this->bhn = $bhn;
        }

        function setPvc($pvc) {
            $this->pvc = $pvc;
        }

        function setUme($ume) {
            $this->ume = $ume;
        }

        function setUde($ude) {
            $this->ude = $ude;
        }

        function setSector_privado($sector_privado) {
            $this->sector_privado = $sector_privado;
        }

        function setPom($pom) {
            $this->pom = $pom;
        }

        function setEtnia($etnia) {
            $this->etnia = $etnia;
        }

        function setResguardo($resguardo) {
            $this->resguardo = $resguardo;
        }

        function setIbo($ibo) {
            $this->ibo = $ibo;
        }

        function setSisben($sisben) {
            $this->sisben = $sisben;
        }

        function setDireccion_residencia($direccion_residencia) {
            $this->direccion_residencia = $direccion_residencia;
        }

        function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        function setLrm($lrm) {
            $this->lrm = $lrm;
        }

        function setLrd($lrd) {
            $this->lrd = $lrd;
        }

        function setEstrato($estrato) {
            $this->estrato = $estrato;
        }

        function setAnos_cumplidos($anos_cumplidos) {
            $this->anos_cumplidos = $anos_cumplidos;
        }

        function setFecha_matricula($fecha_matricula) {
            $this->fecha_matricula = $fecha_matricula;
        }

        function setMatricula_id($matricula_id) {
            $this->matricula_id = $matricula_id;
        }

        function setAno_reporte($ano_reporte) {
            $this->ano_reporte = $ano_reporte;
        }

        function setAnexo_certif_ante($anexo_certif_ante) {
            $this->anexo_certif_ante = $anexo_certif_ante;
        }

}

 ?>