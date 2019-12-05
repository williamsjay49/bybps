<?php

require_once('../../includes/db_object.php');
require_once('../../includes/database.php');

if($session->is_signed_in()) {
	redirect('index.php');
}

if($_GET['login_form'] && $_GET['login_form'] == 'true'){
		$email = $_POST['login_username'];
		$password = $_POST['login_password'];
	}

	//calling method to find user
	$user_found = Db_object::verify_user($username, $password);

	if($user_found){
        $r = $query->fetch(PDO::FETCH_OBJ);
        $db_password = $r->password;
        if(password_verify($password, $db_password)){
	        $id = $r->Id;
			$session->login($id);
	        echo json_encode(['error' => 'success', 'msg' => 'index.php']);
        }else{
        	echo json_encode(['error' => 'no_password', 'msg' => 'Please Enter Correct Password!']);
        }
	}else{
		echo json_encode(['error' => 'no_username', 'msg' => 'Please Enter Correct Username']);
	}

?>