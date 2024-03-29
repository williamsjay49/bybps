<?php 

class Session{
	private $signed_in = false;
	public $user_id;

	function __construct(){
		session_start();
		$this->check_the_login();

	}

	// log in the user
	public function login($user) {
		if($user) {
			$this->user_id = $_SESSION['user_id'] = $user->Id;
			$this->signed_in = true;
		}
	}

	private function check_the_login() {
		if(isset($_SESSION['user_id'])) {
			$this->user_id = $_SESSION['user_id'];
			$this->signed_in = true;
		} else {

			unset($this->user_id);
			$this->signed_in = false;
		}
	}
}

$session = new Session();

?>