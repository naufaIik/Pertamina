<?php 
	session_start();
	$_SESSION['userweb']="";
	session_unset();
	session_destroy();
	header ("location:login.php");
	exit;
 ?>