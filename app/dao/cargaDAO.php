<?php 

/**
* 
*/

require_once 'app/core/conexiondb.php';

class CargaDAO
{
	
	function __construct()
	{
	
	}

	public function listarDepartamentos()
	{
		try{
			$db = DB::getInstance();

			$statement ="SELECT `num_departamento`, `departamento` FROM `departamentos`";

			$prepared = $db->prepare($statement);
			
			$prepared->execute();
			$departamentos = array();
			$jsondata = array();
			if($prepared->rowCount()>0){
				//Se obtuvieron los departamentos
				$i=0;
				foreach ($prepared->fetchAll(PDO::FETCH_ASSOC) as $row) {
					$departamento =array();
					$departamento['num_departamento'] = $row['num_departamento'];
					$departamento['departamento'] = $row['departamento'];
					$departamentos[$i] = $departamento;
					$i++;
			 	}
			 	$jsondata['respuesta'] = Respuesta::get(2);
				$jsondata['data'] = $departamentos;
				return json_encode($jsondata);
			}
			$jsondata['respuesta'] = Respuesta::get(0);
			$jsondata['data'] = NULL;
			return json_encode($jsondata);
				
			
		} catch ( PDOException  $e ) {
			$jsondata['respuesta'] = Respuesta::get(109);
			$jsondata['data'] = $e->getMessage();
			return json_encode($jsondata);
		}	
	}


	public function listarMunicipios()
	{
		try{
			$db = DB::getInstance();

			$statement ="SELECT `num_municipio`, `num_departamento`, `municipio` FROM `municipios` ORDER BY num_departamento ASC";

			$prepared = $db->prepare($statement);
			
			$prepared->execute();
			$jsondata = array();
			if($prepared->rowCount()>0){
				//Se obtuvieron los departamentos
				$i=0;
				$num_depto = "-1";
				$grupoMun = array();
				$municipios = array();
				foreach ($prepared->fetchAll(PDO::FETCH_ASSOC) as $row) {

					if($row['num_departamento'] != $num_depto){
						$grupoMun[$num_depto] = $municipios;
						$num_depto = $row['num_departamento'];
						$municipios = array();
						$i =0;
					}
						$municipio =array();
						$municipio['num_municipio'] = $row['num_municipio'];
						$municipio['num_departamento'] = $row['num_departamento'];
						$municipio['municipio'] = $row['municipio'];
						$municipios[$i] = $municipio;
						$i++;
					
			 	}

			 	$jsondata['respuesta'] = Respuesta::get(2);
			 	$jsondata['data'] = $grupoMun;
				return json_encode($jsondata);
			}
				$jsondata['respuesta'] = Respuesta::get(0);
				$jsondata['data'] = NULL;
				return json_encode($jsondata);
			
		} catch ( PDOException  $e ) {
			$jsondata['respuesta'] = Respuesta::get(109);
			$jsondata['data'] = $e->getMessage();
			return json_encode($jsondata);

		}	
	}


/*
	public function listarTiposDocumento()
	{
		try{
		$db = DB::getInstance();

		$statement ="";

			$prepared = $db->prepare($statement);
			
			$prepared->execute([]);
			

			} catch ( PDOException  $e ) {
				echo $e->getMessage();
  
			}	
	}
*/

	public function listarResguardos()
	{

	}

}

?>