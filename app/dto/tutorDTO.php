<?php 

/**
* 
*/
class TutorDTO{

    private $tutor_id;
    private $nombres; 
    private $apellido1; 
    private $apellido2; 
    private $tipo_doc; 
    private $numero; 
    private $sexo; 
    private $nacionalidad; 
    private $lbrta_mil_clase; 
    private $num_lbrta_mil; 
    private $dm; 
    private $fecha_nacim; 
    private $pais_nacim; 
    private $depto_nacim; 
    private $mun_nacim; 
    private $direccion_corresp; 
    private $pais_corresp; 
    private $depto_corresp; 
    private $mun_corresp; 
    private $telefono; 
    private $email; 
    private $ultm_grd_aprob; 
    private $titulo_obtenido; 
    private $fecha_grado;
    private $fecha_dilig;
    private $ciudad_dilig;
    private $observaciones;


    /**
     * Class Constructor
     * @param    $tutor_id   
     * @param    $nombres   
     * @param    $apellido1   
     * @param    $apellido2   
     * @param    $tipo_doc   
     * @param    $numero   
     * @param    $sexo   
     * @param    $nacionalidad   
     * @param    $lbrta_mil_clase   
     * @param    $num_lbrta_mil   
     * @param    $dm   
     * @param    $fecha_nacim   
     * @param    $pais_nacim   
     * @param    $depto_nacim   
     * @param    $mun_nacim   
     * @param    $direccion_corresp   
     * @param    $pais_corresp   
     * @param    $depto_corresp   
     * @param    $mun_corresp   
     * @param    $telefono   
     * @param    $email   
     * @param    $ultm_grd_aprob   
     * @param    $titulo_obtenido   
     * @param    $fecha_grado   
     * @param    $fecha_dilig   
     * @param    $ciudad_dilig   
     * @param    $observaciones   
     */
    
    public function __construct($nombres = '', $apellido1 = '', $apellido2 = '', $tipo_doc = '', $numero = '', $sexo = '', $nacionalidad = '', $lbrta_mil_clase = '',
                                $num_lbrta_mil = '', $dm = '', $fecha_nacim = '', $pais_nacim = '', $depto_nacim = '', $mun_nacim = '', $direccion_corresp = '',
                                $pais_corresp = '', $depto_corresp = '', $mun_corresp = '', $telefono = '', $email = '', $ultm_grd_aprob = '', $titulo_obtenido = '',
                                $fecha_grado = '', $fecha_dilig = '', $ciudad_dilig = '', $observaciones = '') {

        $this->tutor_id = '';
        $this->nombres = $nombres;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->tipo_doc = $tipo_doc;
        $this->numero = $numero;
        $this->sexo = $sexo;
        $this->nacionalidad = $nacionalidad;
        $this->lbrta_mil_clase = $lbrta_mil_clase;
        $this->num_lbrta_mil = $num_lbrta_mil;
        $this->dm = $dm;
        $this->fecha_nacim = $fecha_nacim;
        $this->pais_nacim = $pais_nacim;
        $this->depto_nacim = $depto_nacim;
        $this->mun_nacim = $mun_nacim;
        $this->direccion_corresp = $direccion_corresp;
        $this->pais_corresp = $pais_corresp;
        $this->depto_corresp = $depto_corresp;
        $this->mun_corresp = $mun_corresp;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->ultm_grd_aprob = $ultm_grd_aprob;
        $this->titulo_obtenido = $titulo_obtenido;
        $this->fecha_grado = $fecha_grado;
        $this->fecha_dilig = $fecha_dilig;
        $this->ciudad_dilig = $ciudad_dilig;
        $this->observaciones = $observaciones;
    }


	
    /**
     * @return mixed
     */
    public function getTutorId(){
        return $this->tutor_id;
    }

    /**
     * @param mixed $tutor_id
     *
     * @return self
     */
    public function setTutorId($tutor_id){
        $this->tutor_id = $tutor_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombres(){
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     *
     * @return self
     */
    public function setNombres($nombres){
        $this->nombres = $nombres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido1(){
        return $this->apellido1;
    }

    /**
     * @param mixed $apellido1
     *
     * @return self
     */
    public function setApellido1($apellido1){
        $this->apellido1 = $apellido1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido2(){
        return $this->apellido2;
    }

    /**
     * @param mixed $apellido2
     *
     * @return self
     */
    public function setApellido2($apellido2){
        $this->apellido2 = $apellido2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoDoc(){
        return $this->tipo_doc;
    }

    /**
     * @param mixed $tipo_doc
     *
     * @return self
     */
    public function setTipoDoc($tipo_doc){
        $this->tipo_doc = $tipo_doc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero(){
        return $this->numero;
    }

    /**
     * @param mixed $numero
     *
     * @return self
     */
    public function setNumero($numero){
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo(){
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     *
     * @return self
     */
    public function setSexo($sexo){
        $this->sexo = $sexo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLbrtaMilClase(){
        return $this->lbrta_mil_clase;
    }

    /**
     * @param mixed $lbrta_mil_clase
     *
     * @return self
     */
    public function setLbrtaMilClase($lbrta_mil_clase){
        $this->lbrta_mil_clase = $lbrta_mil_clase;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumLbrtaMil(){
        return $this->num_lbrta_mil;
    }

    /**
     * @param mixed $num_lbrta_mil
     *
     * @return self
     */
    public function setNumLbrtaMil($num_lbrta_mil){
        $this->num_lbrta_mil = $num_lbrta_mil;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDm(){
        return $this->dm;
    }

    /**
     * @param mixed $dm
     *
     * @return self
     */
    public function setDm($dm){
        $this->dm = $dm;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacim(){
        return $this->fecha_nacim;
    }

    /**
     * @param mixed $fecha_nacim
     *
     * @return self
     */
    public function setFechaNacim($fecha_nacim){
        $this->fecha_nacim = $fecha_nacim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaisNacim(){
        return $this->pais_nacim;
    }

    /**
     * @param mixed $pais_nacim
     *
     * @return self
     */
    public function setPaisNacim($pais_nacim){
        $this->pais_nacim = $pais_nacim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeptoNacim(){
        return $this->depto_nacim;
    }

    /**
     * @param mixed $depto_nacim
     *
     * @return self
     */
    public function setDeptoNacim($depto_nacim){
        $this->depto_nacim = $depto_nacim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunNacim(){  
        return $this->mun_nacim;
    }

    /**
     * @param mixed $mun_nacim
     *
     * @return self
     */
    public function setMunNacim($mun_nacim){
        $this->mun_nacim = $mun_nacim;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccionCorresp(){
        return $this->direccion_corresp;
    }

    /**
     * @param mixed $direccion_corresp
     *
     * @return self
     */
    public function setDireccionCorresp($direccion_corresp){
        $this->direccion_corresp = $direccion_corresp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaisCorresp(){
        return $this->pais_corresp;
    }

    /**
     * @param mixed $pais_corresp
     *
     * @return self
     */
    public function setPaisCorresp($pais_corresp){
        $this->pais_corresp = $pais_corresp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeptoCorresp(){
        return $this->depto_corresp;
    }

    /**
     * @param mixed $depto_corresp
     *
     * @return self
     */
    public function setDeptoCorresp($depto_corresp){
        $this->depto_corresp = $depto_corresp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMunCorresp(){
        return $this->mun_corresp;
    }

    /**
     * @param mixed $mun_corresp
     *
     * @return self
     */
    public function setMunCorresp($mun_corresp){
        $this->mun_corresp = $mun_corresp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefono(){
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     *
     * @return self
     */
    public function setTelefono($telefono){
        $this->telefono = $telefono;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail(){
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUltmGrdAprob(){
        return $this->ultm_grd_aprob;
    }

    /**
     * @param mixed $ult_grd_aprob
     *
     * @return self
     */
    public function setUltmGrdAprob($ultm_grd_aprob){
        $this->ultm_grd_aprob = $ultm_grd_aprob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTituloObtenido(){
        return $this->titulo_obtenido;
    }

    /**
     * @param mixed $titulo_obtenido
     *
     * @return self
     */
    public function setTituloObtenido($titulo_obtenido){
        $this->titulo_obtenido = $titulo_obtenido;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaGrado(){
        return $this->fecha_grado;
    }

    /**
     * @param mixed $fecha_grado
     *
     * @return self
     */
    public function setFechaGrado($fecha_grado){
        $this->fecha_grado = $fecha_grado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNacionalidad(){
        return $this->nacionalidad;
    }

    /**
     * @param mixed $nacionalidad
     *
     * @return self
     */
    public function setNacionalidad($nacionalidad){
        $this->nacionalidad = $nacionalidad;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaDilig(){
        return $this->fecha_dilig;
    }

    /**
     * @param mixed $fecha_dilig
     *
     * @return self
     */
    public function setFechaDilig($fecha_dilig){
        $this->fecha_dilig = $fecha_dilig;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCiudadDilig(){
        return $this->ciudad_dilig;
    }

    /**
     * @param mixed $ciudad_dilig
     *
     * @return self
     */
    public function setCiudadDilig($ciudad_dilig){
        $this->ciudad_dilig = $ciudad_dilig;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservaciones(){
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     *
     * @return self
     */
    public function setObservaciones($observaciones){
        $this->observaciones = $observaciones;
        return $this;
    }

}

 ?>