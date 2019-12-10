<?php 

class User extends Db_object {

	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'email', 'password', 'creation_date', 'last_login', 'user_role');
	public $id;
	public $username;
	public $password;
	public $email;
	public $user_role;
	





	// verify username and password
	public static function verify_user($username, $password) {
		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'"; 

		$result = self::find_by_query($sql);

		return !empty($result) ? array_shift($result) : false;
	}





}



	
?>