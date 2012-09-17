<?php
	session_start();
	if(isset($_SESSION['uname']) && isset($_SESSION['event'])){
		session_destroy();
	}
	header("Location:index.php");
?>

