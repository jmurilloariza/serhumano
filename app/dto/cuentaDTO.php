<?php 

/**
* 
*/
class CuentaDTO 
{

	private $cuenta_id;
    private $email;
    private $password;
    private $foto_perfil;
    private $tipo_cuenta;

     function __construct($email, $password, $foto_perfil, $tipo_cuenta) {
        $this->email = $email;
        $this->password = $password;
        $this->foto_perfil = $foto_perfil;
        $this->tipo_cuenta = $tipo_cuenta;
    }

    
    function getCuenta_id() {
        return $this->cuenta_id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getFoto_perfil() {
        return $this->foto_perfil;
    }

    function setCuenta_id($cuenta_id) {
        $this->cuenta_id = $cuenta_id;
    }

    function setEmail($correo) {
        $this->correo = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFoto_perfil($foto_perfil) {
        $this->foto_perfil = $foto_perfil;
    }

     function getTipo_cuenta() {
        return $this->tipo_cuenta;
    }

    function setTipo_cuenta($tipo_cuenta) {
        $this->tipo_cuenta = $tipo_cuenta;
    }


}
 ?>