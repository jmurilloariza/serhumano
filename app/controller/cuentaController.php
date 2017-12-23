<?php 

/**
*  
*/

require_once 'app/model/cuentaModel.php';
require_once 'app/dto/cuentaDTO.php';

class CuentaController 
{
	private $cuentaModel;
	
	function __construct()
	{
		$this->cuentaModel = new cuentaModel();
	}


	public function registrarCuenta($email, $password, $foto_perfil, $tipo_cuenta)
	{
		if($tipo_cuenta != '' && $email != '' && $password != '')
      	{
	        if(filter_var($email, FILTER_VALIDATE_EMAIL))
	        {
	          
	          $email = htmlspecialchars($email);
	          $password = htmlspecialchars($password);
	          $cuenta = new cuentaDTO($email, $password, $foto_perfil, $tipo_cuenta);
	          $this->cuentaModel->registrarCuenta($cuenta );
	        }else{
	           echo "EMAIL INVALIDA";
	        }

      }else{
       echo "CAMPOS VACIOS...";
      }
	}


	/**
	* Metodo que valida las entradas del formulario de inicio de sesion,
    * instancia un objeto CuentaDTO e invoca un metodo de CuentaModel.
	 	* @param $correo_usuarios - Correo electronico de la Cuenta
	 	* @param $password -  Clave de acceso
	*/
    public function iniciarSesion($email, $password)
    {
      if($email != '' && $password != '')
      {
	        if(filter_var($email, FILTER_VALIDATE_EMAIL) )
	        {
	          $email = htmlspecialchars($email);
	          $password = htmlspecialchars($password);
	          $cuenta = new cuentaDTO($email, $password, null, null);
	          $this->cuentaModel->iniciarSesion($cuenta);
	        }else{
	          #correo no valido
	          echo "CORREO NO VALIDO";
	        }

      }else{
        #faltan datos
        echo "FALTAN DATOS..";
        
      }

    }

    public function obtenerModulos($email)
    {
    	return  $this->cuentaModel->obtenerModulos($email);
    }


    /**
    * Cierra la sesión actualmente iniciada, y redirige a la vista de inicio de sesión.
    */
    public function cerrarSesion_C() {
     
    }

    /**
	* Metodo que valida la entrada proveniente del formulario de recuperacion de cuenta,
    * instancia un objeto CuentaDTO e invoca un metodo de CuentaDAO.
    * @param $email_cuenta_lostpass - Correo electronico de la Cuenta
	*/
    public function recuperarCuenta($email_cuenta_lostpass)
    {
     

    }

    
}

 ?>