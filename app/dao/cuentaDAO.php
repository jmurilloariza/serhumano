<?php 

/**
* 
*/
require_once 'app/dto/cuentaDTO.php';
require_once 'app/core/conexiondb.php';

class CuentaDAO
{
	
	function __construct()
	{
		
	}

	public function registrarCuenta($cuentaDTO)
	{
		try{
			$db = DB::getInstance();

			$cuentaDTO->setPassword(password_hash($cuentaDTO->getPassword(), PASSWORD_DEFAULT));
			$statement ="INSERT INTO `cuentas`( `email`, `password`, `foto_perfil`, `tipo_cuenta`) VALUES (:email, :password, :foto_perfil, :tipo_cuenta) ;" ;

			$prepared = $db->prepare($statement);
			
			$prepared->execute([
				'email'=> $cuentaDTO->getEmail(),
				'password'=> $cuentaDTO->getPassword(),
				'foto_perfil'=> $cuentaDTO->getFoto_perfil(),
				'tipo_cuenta'=> $cuentaDTO->getTipo_cuenta()
			]);

			if($prepared->rowCount()==1){
				echo "REGISTRO DE CUENTA EXITOSO ";
			}else{
				echo "NO SE REGISTRO CUENTA";
			}
		} catch ( Exception  $e ) {
			echo $e->getMessage();

		}

		
	}

	public function iniciarSesion($cuentaDTO)
	{
		try{
		$db = DB::getInstance();

		$statement ="SELECT `password`, `tipo_cuenta` FROM `cuentas` WHERE email = :email" ;

			$prepared = $db->prepare($statement);
			
			$prepared->execute([
				'email'=> $cuentaDTO->getEmail()
			]);

			if($prepared->rowCount()>0){
				$datos = $prepared->fetch(PDO::FETCH_ASSOC);
				echo "get Password: ".$cuentaDTO->getPassword();
				echo "<br>.password encrip: ".$datos['password'];

				if (@password_verify($cuentaDTO->getPassword(), $datos['password'])) {
						$_SESSION['tipo_cuenta'] = $datos['tipo_cuenta'];
						$_SESSION['correo'] = $cuentaDTO->getEmail();
						session_set_cookie_params(2*60*60, '/', '', false, true);
						//Obtener el id Uusuario y agregarlo  a la session
						$this->obtenerDatosUsuario( $datos['tipo_cuenta'] , $cuentaDTO->getEmail());
						//Obtener los nombres de los modulos asociados al usuario y aññadirlos a session
						$this->obtenerModulos($cuentaDTO->getEmail());
						//Coinciden las credenciales
						//ini_set('session.cookie_lifetime', time() + (60*60*24));


						echo "ACCESO VALIDO";
		  		}else{
		  			//datos de acceso invalidos
				$jsondata['success']=4;
				echo "ACCESO NO VALIDO";
				}
	  		}else{
	  			//No se encontro cuenta asociada al correo
	  			echo "NO SE ENCONTRO CUENTA";
				$jsondata['success']=3;
			}

		} catch ( Exception  $e ) {
			echo $e->getMessage();

		}

	}

	public function obtenerModulos($email)
	{
		try{
		$db = DB::getInstance();

		$statement ="SELECT DISTINCT modulo , `ar` FROM `cuentas` JOIN cuentas_roles ON (cuentas"."."."cuenta_id = cuentas_roles"."."."cuenta_id) JOIN roles_modulos ON (cuentas_roles"."."."rol_id = roles_modulos"."."."rol_id) JOIN `modulos` ON (roles_modulos"."."."modulo_id = modulos"."."."modulo_id) WHERE `email` = :email" ;

			$prepared = $db->prepare($statement);
			
			$prepared->execute([
				'email'=> $email
			]);

			$modulos = array();
			if($prepared->rowCount()>0){
				$i=0;
				foreach ($prepared->fetchAll(PDO::FETCH_ASSOC) as $row) {
					$modulos[$i] = $row['modulo'];
					echo $modulos[$i].'<br>';
					$i++;
			 	}
			 	$_SESSION['modulos'] = $modulos;

	  		}else{
	  			//No se encontro cuenta asociada al correo
	  			echo "NO SE ENCONTRARON MODULOS";
			}

		} catch ( PDOException   $e ) {
			echo $e->getMessage();

		}
	}

	private function obtenerDatosUsuario($tipo_cuenta , $email)
	{
			try{
			$db = DB::getInstance();

			if($tipo_cuenta == "alumno"){
				echo "Es de TIPO ALUMNO";
				echo "<br>emial ".$email."<br>";
				$statement ="SELECT `alumno_id` FROM `alumnos` WHERE email = :email" ;
				$prepared = $db->prepare($statement);
				$prepared->execute([
				'email'=> $email
				]);
				if($prepared->rowCount()>0){
					$datos = $prepared->fetch(PDO::FETCH_ASSOC);
					$_SESSION['usuario_id'] = $datos['alumno_id'];
			  	}else{
			  			echo " NO se encontro un usuario asociado al email";
					}

			}elseif ($tipo_cuenta == "tutor") {

				$statement ="SELECT `tutor_id` FROM `tutores` WHERE email = :email" ;
				$prepared = $db->prepare($statement);
				$prepared->execute([
				'email'=> $email
				]);
				if($prepared->rowCount()>0){
					$_SESSION['usuario_id'] = $datos['tutor_id'];
			  		}else{
			  			echo "NO se encontro un usuario asociado al email";
					}

			}elseif ($tipo_cuenta == "telento humano") {
				$statement ="" ;


			}else{
				$statement ="" ;


			}

		} catch ( Exception  $e ) {
			echo $e->getMessage();

		}
	}


}