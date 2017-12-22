<?php 

require 'vendor/autoload.php';
require '/../controller/controllerView.php';
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

		$router->post('/prueba', function(){
			$array = array();
			array_push($array, 'prueba');
			echo json_encode($array);
			return '/prueba';
		});

		$router->get('/home', function (){
			$modulos = null;
			return $this->controllerView->render('home.html', $modulos);
		});

		$router->get('/tutor', function() {
			return $this->tutorController->registrarTutor('', '1',
				'1', '1', '1', '1', '1', '1',
				'1', '1', '2017-12-12', '1', '1',
				'1', '1', '1', '1', '1',
				'1', '1', '1', 'titulo', '2017-12-12');
		});

		$router->get('/login', function(){
			return $this->controllerView->showView('index.html');
		}, ['before' => 'auth']);

		$router->get('/', function() {
		    return $this->controllerView->showView('home.html');
		}, ['before' => 'auth']);

		$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
		try {
			$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
			echo $response;
		} catch (Exception $e) {
			echo '404 not found';
		}

	}
}

 ?>
