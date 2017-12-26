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
				var_dump($departamentos);
				
			}
				
			
		} catch ( PDOException  $e ) {
			echo $e->getMessage();

		}	
	}


	public function listarMunicipios()
	{
		try{
			$db = DB::getInstance();

			$statement ="SELECT `num_municipio`, `num_departamento`, `municipio` FROM `municipios` ORDER BY num_departamento ASC";

			$prepared = $db->prepare($statement);
			
			$prepared->execute();
			
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
				var_dump($grupoMun);
			}
			
		} catch ( PDOException  $e ) {
			echo $e->getMessage();

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