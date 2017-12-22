<?php


class DB {

	protected static $instance;
	private static $host, $user, $pass, $database, $charset;

	protected function __construct() {}

	public static function getInstance() {
		if(empty(self::$instance)) {
			$db_cfg = require_once 'app/config/database.php';
	        $host=$db_cfg["host"];
	        $user=$db_cfg["user"];
	        $pass=$db_cfg["pass"];
	        $database=$db_cfg["database"];
			try {
				self::$instance = new PDO("mysql:host=".$host.';dbname='.$database, $user, $pass);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
				self::$instance->query('SET NAMES utf8');
				self::$instance->query('SET CHARACTER SET utf8');
				echo "instancio<br>";
			} catch(PDOException $error) {
				echo $error->getMessage();
			}
		}
		return self::$instance;
	}
	public static function setCharsetEncoding() {
		if (self::$instance == null) {
			self::connect();
		}
		self::$instance->exec(
			"SET NAMES 'utf8';
			SET character_set_connection=utf8;
			SET character_set_client=utf8;
			SET character_set_results=utf8");
	}
}
