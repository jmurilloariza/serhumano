<?php 

/**
* 
*/
class AlumnoDTO {

  private $alumno_id;
  private $tipo_documento;
  private $numero_documento;
  private $lugar_exp_mun;
  private $lugar_exp_depto;
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
  private $anexo_documento;
  private $email;
  
  function __construct()
  {
    # code...
  }

  function getAlumno_id() {
      return $this->alumno_id;
  }

  function getTipo_documento() {
      return $this->tipo_documento;
  }

  function getNumero_documento() {
      return $this->numero_documento;
  }

  function getLugar_exp_mun() {
      return $this->lugar_exp_mun;
  }

  function getLugar_exp_depto() {
      return $this->lugar_exp_depto;
  }

  function getApellido_1() {
      return $this->apellido_1;
  }

  function getApellido_2() {
      return $this->apellido_2;
  }

  function getNombre_1() {
      return $this->nombre_1;
  }

  function getNombre_2() {
      return $this->nombre_2;
  }

  function getFecha_nac() {
      return $this->fecha_nac;
  }

  function getLugar_nac_mun() {
      return $this->lugar_nac_mun;
  }

  function getLugar_nac_depto() {
      return $this->lugar_nac_depto;
  }

  function getGenero() {
      return $this->genero;
  }

  function getDiscapacidad() {
      return $this->discapacidad;
  }

  function getCap_excepcionales() {
      return $this->cap_excepcionales;
  }

  function setAlumno_id($alumno_id) {
      $this->alumno_id = $alumno_id;
  }

  function setTipo_documento($tipo_documento) {
      $this->tipo_documento = $tipo_documento;
  }

  function setNumero_documento($numero_documento) {
      $this->numero_documento = $numero_documento;
  }

  function setLugar_exp_mun($lugar_exp_mun) {
      $this->lugar_exp_mun = $lugar_exp_mun;
  }

  
  function setLugar_exp_depto($lugar_exp_depto) {
      $this->lugar_exp_depto = $lugar_exp_depto;
  }

  function setApellido_1($apellido_1) {
      $this->apellido_1 = $apellido_1;
  }

  function setApellido_2($apellido_2) {
      $this->apellido_2 = $apellido_2;
  }

  function setNombre_1($nombre_1) {
      $this->nombre_1 = $nombre_1;
  }

  function setNombre_2($nombre_2) {
      $this->nombre_2 = $nombre_2;
  }

  function setFecha_nac($fecha_nac) {
      $this->fecha_nac = $fecha_nac;
  }

  function setLugar_nac_mun($lugar_nac_mun) {
      $this->lugar_nac_mun = $lugar_nac_mun;
  }

  function setLugar_nac_depto($lugar_nac_depto) {
      $this->lugar_nac_depto = $lugar_nac_depto;
  }

  function setGenero($genero) {
      $this->genero = $genero;
  }

  function setDiscapacidad($discapacidad) {
      $this->discapacidad = $discapacidad;
  }

  function setCap_excepcionales($cap_excepcionales) {
      $this->cap_excepcionales = $cap_excepcionales;
  }

  function getAnexo_documento() {
      return $this->anexo_documento;
  }

  function setAnexo_documento($anexo_documento) {
      $this->anexo_documento = $anexo_documento;
  }

  function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }
  
  
}

 ?>