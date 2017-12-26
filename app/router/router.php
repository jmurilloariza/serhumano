<?php 

require 'vendor/autoload.php';
require 'app/controller/controllerView.php';
require 'app/controller/alumnoController.php';
require 'app/controller/matriculaController.php';
require 'app/controller/tutorController.php';

use Phroute\Phroute\RouteCollector;


/**
* 
*/
class Router{
	
	private $alumnoController;
	private $matriculaController;
	private $controllerView;
	private $tutorController;

	function __construct() {
		$this->controllerView = new ControllerView();
		$this->alumnoController = new AlumnoController();
		$this->matriculaController = new MatriculaController();
		$this->tutorController = new TutorController();
	}	

	public function router(){
		#http://localhost/serhumano/

		/**
		 * verifica que exita una ruta
		 * index.php?route=/
		 */
		if(!isset($_GET['route'])){
		    $route = '/';
		}else{
		    $route = $_GET['route'];
		}

		$router = new RouteCollector();

		/**
		 * filtro de autenticacion de sesiones
		 */
		$router->filter('auth', function(){    
		    if(!isset($_SESSION['user'])){
		    	echo $this->controllerView->showView('index.html');
		        return false;
		    }
		});
		/**
		 * Peticiones POST
		*/
		$router->post('/matricula/registrarAlumno', function(){			
			$array = array();
			$array['nombre'] = 'Gerson';
			
			$res_reg_alumno = $this->alumnoController->registrarAlumno($_POST['tipo_documento'],$_POST['numero_documento'],$_POST['lugar_exp_mun'],$_POST['lugar_exp_depto'],$_POST['apellido_1'],$_POST['apellido_2'],$_POST['nombre_1'],$_POST['nombre_2'],$_POST['fecha_nac'],$_POST['lugar_nac_mun'],$_POST['lugar_nac_depto'],$_POST['genero'],$_POST['discapacidad'],$_POST['cap_excepcionales'],$_POST['anexo_docume'],$_POST['email']);

			return  json_encode($array);
		});

		$router->post('/matricula/registrarMatricula', function(){
			$array = array();
			$array['rta'] = 'Registro Matricula Exitoso';
			
			$res_reg_matricula = $this->matriculaController->registrarMatricula($_POST['alumno_id'],$_POST['institucion_id'],4,$_POST['jornada'],$_POST['grado'],$_POST['grupo_curso'],$_POST['subsidiado'],$_POST['repitente'],$_POST['nie'],$_POST['saaa'],$_POST['cafaa'],$_POST['zra'],$_POST['amcf'],$_POST['bvfp'],$_POST['bhdmcf'],$_POST['bhn'],$_POST['pvc'],$_POST['ume'],$_POST['ude'],$_POST['sector_privado'],$_POST['pom'],$_POST['etnia'],$_POST['resguardo'],$_POST['sisben'],$_POST['direccion_residencia'],$_POST['telefono'],$_POST['lrm'],$_POST['lrd'],$_POST['estrato'],$_POST['anos_cumplidos'],$_POST['anexo_certif_ante']);

			return  json_encode($array);
		});

		$router->post('/matricula/registrarHojaVida', function(){
			$array = array();
			$array['rta'] = 'Registro Hoja de vida Exitoso';
			
			$res_reg_HV = $this->tutorController->registrarHojaDeVida($_POST['nombres'],$_POST['apellido1'],$_POST['apellido2'],$_POST['tipo_doc'],$_POST['numero'],$_POST['sexo'],$_POST['nacionalidad'],$_POST['lbrta_mil_clase'],$_POST['num_lbrta_mil'],$_POST['dm'],$_POST['fecha_nacim'],$_POST['pais_nacim'],$_POST['depto_nacim'],$_POST['mun_nacim'],$_POST['direccion_corresp'],$_POST['pais_corresp'],$_POST['depto_corresp'],$_POST['mun_corresp'],$_POST['telefono'],$_POST['email'],$_POST['ultm_grd_aprob'],$_POST['titulo_obtenido'],$_POST['fecha_grado'],$_POST['fecha_diligenciamiento'],$_POST['observacion'],$_POST['ciudad_diligenciamiento'],$_POST['experiencias_laborales'],$_POST['educaciones_superiores']);
			echo $res_reg_HV;
			return  json_encode($array);
		});

		/**
		 * Peticiones GET
		*/
		
		$router->post('/matricula/validarEstudiante', function(){			
			$array = array();
			$array['nombre'] = 'Gerson';			
			$res_validar_alumno = $this->matriculaController->verificarExistenciaMatriculaAlumno($_POST['tipo_documento_validacion'],$_POST['numero_documento_validacion']);

			return  json_encode($array);
		});

		$router->get('/home', function (){
			$modulos = null;
			return $this->controllerView->render('home.html', $modulos);
		});

		$router->get('/login', function(){
			return $this->controllerView->showView('index.html');
		}, ['before' => 'auth']);

		$router->get('/hojaDeVida', function (){			
			return $this->controllerView->showView('contenido/docente/hojaDeVida.html');
		});

		$router->get('/registroEstudiante', function (){			
			return $this->controllerView->showView('contenido/docente/registroEstudiante.html');
		});

		$router->get('/matricula6A', function (){			
			return $this->controllerView->showView('contenido/formato_matricula.html');
		});

		$router->get('/', function() {
		    return $this->controllerView->showView('home.html');
		}/*, ['before' => 'auth']*/);

		$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
		try {
			$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
			echo $response;
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}
}

?>

