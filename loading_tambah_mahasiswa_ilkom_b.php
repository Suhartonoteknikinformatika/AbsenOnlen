<?php 

include "loading.php";

	$nim=$_POST["nim"];
	$nama=$_POST["nama"];
	$insert="insert into ilkom_b(NIM, Nama) values('$nim','$nama')";

//$hasil=mysql_query($query);
	$hasil=mysqli_query($koneksidb,$insert);
	echo "<a href=home_ilkom_b.php>Kembali ke Tabel</a>";
	echo "<br><br>";
if ($hasil)
{
	echo "<font size='5' color='blue'>Mahasiswa berhasil didaftarkan</font>";
	
}
else
{
	echo "<font size='5' color='red'>Mahasiswa Gagal didaftarkan</font>";
}

?> 

<html>
	<head>
		<title>::::: Tambah Mahasiswa :::::</title>
	</head>
	<body>
	</body>
</html>
