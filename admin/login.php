<?php require_once("includes/header.php"); ?>

<?php 

if($session->is_signed_in()) {
	redirect('index.php');
}

if(isset($_POST['submit'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	// method to check database for user

	$user_found = User::verify_user($username, $password);

	if($user_found) {
		$session->login($user_found);
		redirect('index.php');
	} else {
		$the_message = "Your password or username are incorrect";
	}


} else {
	$the_message = "";
	$username = "";
	$password = "";
}

?>
<div>
	<h4><?php echo $the_message; ?></h4>
	<form action="" method="post">
	  <div>
	    <label for="username">Username</label>
	    <input type="text" name="username" value="<?php echo htmlentities($username); ?>">
	  </div>

	  <div>
	    <label for="password">Password</label>
	    <input type="password" name="password" value="<?php echo htmlentities($password); ?>">
	  </div>

	  <div>
	  	<input type="submit" name="submit" value="Submit">
	  </div>
	</form>
</div>