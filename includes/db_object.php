<?php

class Db_object{


	public static function verify_user($username, $password){
	
		global $database;
		$query = $database->prepare("SELECT * FROM users WHERE username = ?");
			$query->execute(array($username));
		$result = $query->rowCount() != 0 ? true : false;
		return $result;
	}
}

?>