<?php 
session_start();
	if (!isset($_SESSION["login"])) {
		header("location: login.php");
		exit;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin SLurrrrr</title>
</head>
<body>
INI HALAMAN ADMIN <a href="logout.php">Keluar</a>
</body>
</html>