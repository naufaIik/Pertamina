<?php 
require 'koneksi.php';
	if( isset($_POST["register"]) ) {
		if( registrasi($_POST) > 0){
			echo "<script>
					alert('user baru berhasil dibuat :)');
			</script>";
		} else{
			echo mysqli_error($koneksi);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<style>
		label{
			display: block;
		}
	</style>
</head>
<body>
	<div><img src="img\login.JPG" width="1500" height="200">

<h1 align="center">Halaman Registrasi</h1>

<form action="" method="post">
<div align="center">
	<ul>
		<li>

			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">Ulangi password :</label>
			<input type="password" name="password2" id="password">
		</li>
		<br>
		<li>
			<button type="submit" name="register">Register</button>
		</li>
	</ul>
	</div>
</form>

</body>
</html>