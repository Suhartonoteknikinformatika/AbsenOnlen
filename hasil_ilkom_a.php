<?php
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$kehadiran = $_POST["kehadiran"];
	foreach($kehadiran as $hasil) 
	$alasan = $_POST["alasan"];
?>

<?php 

// sertakan file loading.php
	include "loading.php";

// perintah query
	$query="select * from ilkom_a";

//$perintah=mysql_query($query);
	$perintah=mysqli_query($koneksidb,$query);

//tampilkan data

	while ($data=mysqli_fetch_array($perintah))


$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$waktu=gmdate('d M Y - H:i',$var);


$handle=fopen('hasil_absen/absen_ILKOM_A.txt','a');
$save=fwrite($handle,
'+++++++++++++++++++++++++++++++++
Tanggal & Jam: '.$waktu.'    
                             
NIM : '.$nim.'               
Nama : '.$nama.'             
Kehadiran : '.$hasil.'   
Alasan : '.$alasan.'         
');

fclose($handle);

?>

<!DOCTYPE html>
<html>
<head>
	<title>::::: Sukses Absen :::::</title>
</head>
<body>
	<center><h1><font color="orange"> Sukses! </font></h1>
	<a href="home_ilkom_a.php"><input type="submit" value="Kembali" name="submit"></a>
	</center>
</body>
</html>
