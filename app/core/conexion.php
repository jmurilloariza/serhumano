<?php
class Conexion{

    private $host, $port, $user, $pass, $database, $charset;
    private $db;
    public static $instancia;
    public function __construct() {
        $db_cfg = require_once 'app/config/database.php';
        $this->host=$db_cfg["host"];
        $this->user=$db_cfg["user"];
        $this->pass=$db_cfg["pass"];
        $this->database=$db_cfg["database"];
        $this->instancia = $this->conexionDB();
    }
    
    private function conexionDB(){
        try{
        $this->db = new PDO('mysql:host='.$this->host.'; dbname='.$this->database, 
            $this->user, $this->pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
        echo "ERROR: " . $e->getMessage();
        }
    }

    public static function getInstancia(){
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }
    

    public function query($sql) {
       return $this->db->query($sql);
    }

    
}
?>
