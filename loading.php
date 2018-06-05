<?php 

//masuk ke database project1 menggunakan user pass (marianaDB) 

	$host="localhost";
	$username="root";
	$password="";
	$db="coba";

//koneksi ke server database project1
//login menggunakan ($username,$password) yg sudah ditentukan

	$koneksidb=mysqli_connect($host,$username,$password,$db) or die (mysqli_connect_error());

//pilih database
//jika salah memasukan user password maka gagal login

?> 