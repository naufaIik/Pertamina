<?php 
	session_start();
	if (isset($_SESSION["login"])) {
		header("location:beranda.php");
		exit;
	}
	include "koneksi.php"
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>Halaman Login</title>
</head>
<body>
	<div><img src="img\login.JPG" width="1500" height="200">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<form method="post">
		<div align="center">
		<label>Username :</label>
		<input type="text" name="fusername"><br>
	</div>
	<br>
	<br>
	<div align="center">
		<label>Password :</label>
		<input type="password" name="fpassword"><br>
		<br>
		<button  type="submit" name="fmasuk">Login</button>
		<br>
		<br>
	</form>
	<form action="register.php" method="post" onSubmit="return validasi()">
        <input type="submit" value="Register" class="tombol">
      </div>
	<br>
	<br>
	<?php 
		if (isset($_POST['fmasuk'])) {
			$username = $_POST['fusername'];
			$password = $_POST['fpassword'];
			$qry = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");
			$cek = mysqli_num_rows($qry);
			if ($cek==1) {
				$_SESSION['userweb']=$username;
				header ("location:beranda.php");
				$_SESSION["login"] = true;
				exit;
			}
			else {
				echo "-----------------------------------------------------------------------------------------------------------------------Maaf Data salah------------------------------------------------------------------------------------------------------------------";
			}
		}
	 ?>
</body>
</html>










