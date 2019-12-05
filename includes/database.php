<?php 
session_start();

class Database{
	public $db;

	//instantiate database connection
	function __construct(){
		$this->open_db_connection();
	}

	public function open_db_connection(){
		$this->db = new PDO('mysql:host=localhost;dbname=bybps', 'root', '');
	}

	public function query($sql) {
		$result = $this->connection->query($sql);
		return $result;
	}
}

$database = new Database();
?>