<script language="javascript">
function confirm_hapus()
{
	ok=confirm('Hapus tenan gak?')
	if (ok)
	{
	  return true;
	}
	else
	{
	  return false;
	}
}
</script>


<?php

	session_start();
if (empty($_SESSION["user"]) OR empty($_SESSION["pass"]))
{
	header("Location:nganu.html");
} 
else 
{

?>

<?php 

// sertakan file loading.php
	include "loading.php";

// perintah query
	$select="select * from ilkom_a";

//$perintah=mysql_query($query);
	$perintah=mysqli_query($koneksidb,$select);

	echo "<html>
			<head>
			</head>
			<body>";
	echo "<h3><font size='5' color='black'>Absen Harian Ilmu Komunikasi Kelas A</font></h3>
		<table border=3>
	  	  <tr>
 	  	  	<td>NIM</td>
 	  	  	<td>NAMA</td>
 	  	  	<td>PILIH</td>
 	  	  	<td>ALASAN</td>
 	  	  	<td>KILL</td>
 	  	  	<td>ABSEN</td>

	  	  </tr>";

// tampilkan data

	while ($data=mysqli_fetch_array($perintah))
{
	echo "<form method='post' action='hasil_ilkom_a.php'>";
	echo "<tr>	  
			<td><input type='text' name='nim' value='$data[NIM]'></td>
			<td><input type='text' name='nama' value='$data[Nama]'></td>
	        <td>		
	        	<select name='kehadiran[]'>
					<option value='-''></option>
					<option value='Hadir'>Hadir</option>
					<option value='Tidak Hadir'>Tidak Hadir</option>
					<option value='Terlambat'>Terlambat</option>
				</select>
			</td>";
	echo 	"<td><input type='text' name='alasan'></td>";
    echo 	"<td><a href=hapus_mahasiswa_ilkom_a.php?nim=$data[NIM] onclick='return confirm_hapus()'>Hapus</a></td>";
    echo 	"<td><center><input name='langsung' type='submit' value='Langsung!!!'></center></td>";
	echo "</tr>";
	echo "</form>";
}
	echo "</table>";
	echo "<a href=home.php>Kembali</a>&nbsp
		<a href=keluar.php>Logout</a>&nbsp
		<a href=tambah_mahasiswa_ilkom_a.php>Tambah Mahasiswa</a>
		</body>
		</html>";
?>

<?php

} 

?>

<html>
	<head>
		<title>::::: Daftar Mahasiswa :::::</title>
	</head>
	<body bgcolor='pink'>
	</body>
</html>