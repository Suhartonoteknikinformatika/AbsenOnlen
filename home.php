<?php

	session_start();
if (empty($_SESSION["user"]) OR empty($_SESSION["pass"]))
{
	header("Location:nganu.html");
} 
else 
{

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor='pink'>

</body>
</html>
<?php
	echo "<head>
		<title>Title Project</title>
	</head>
	<body>
		<center><br>
		<h3><font size='5' color='black'>Absen Harian Tehnik Informatika</font></h3><br>
        <a href='home_ti_a.php'><input type='submit' value='Go To Class A' name='submit'></a><br><br>
        <a href='home_ti_b.php'><input type='submit' value='Go To Class B' name='submit'></a><br><br>
        <a href='home_ti_c.php'><input type='submit' value='Go To Class C' name='submit'></a><br><br>
		
		<h3><font size='5' color='black'>Absen Harian Ilmu Komunikasi</font></h3><br>
		<a href='home_ilkom_a.php'><input type='submit' value='Go To Class A' name='submit'></a><br><br>
        <a href='home_ilkom_b.php'><input type='submit' value='Go To Class B' name='submit'></a><br><br>
        <a href='home_ilkom_c.php'><input type='submit' value='Go To Class C' name='submit'></a><br><br>
		
		<h3><font size='5' color='black'>Absen Harian Sistem Informasi</font></h3><br>
		<a href='home_si_a.php'><input type='submit' value='Go To Class A' name='submit'></a><br><br>
        <a href='home_si_b.php'><input type='submit' value='Go To Class B' name='submit'></a><br><br>
        <a href='home_si_c.php'><input type='submit' value='Go To Class C' name='submit'></a><br><br>
        <a href=keluar.php>Logout</a>
        </center>
     </body>";
?>
<?php
}
?>