<?php require_once("includes/header.php"); 

if(!$session->is_signed_in()) { redirect("login.php"); }
?>

<div>
	<h1>Welcome Johnson</h1>
	<div><a href="logout.php">LogOut</a></div>
</div>

<?php include("includes/footer.php"); ?>

