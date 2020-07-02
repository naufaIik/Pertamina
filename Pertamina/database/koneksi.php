<?php 
	$koneksi = mysqli_connect("localhost","root","","login");

 function registrasi($data){
 	global $koneksi;

 	$username = strtolower(stripslashes($data["username"]));
 	$password = mysqli_real_escape_string($koneksi, $data["password"]);
 	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

 	$result = mysqli_query($koneksi,"SELECT username FROM tab_login WHERE username ='$username'");
 	if(mysqli_fetch_assoc($result)){
 		echo "<script>
 				alert('username sudah terdaftar')
 				</script>";
 		return false;
 	}

 	if($password !== $password2){
 		echo "<script>
 				alert('Password Tidak Sesuai');
 				</script>";
 		return false;
 	}

 	$password = md5($password, PASSWORD_DEFAULT);

 	mysqli_query($koneksi, "INSERT INTO tab_login VALUES('$username','$password') ");

 	return mysqli_affected_rows($koneksi);

}