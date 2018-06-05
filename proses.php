<?php

//termasuk file loading.php
include "loading.php";

//variable user dan pass di postingkan di query database
	$user=$_POST[user];
	$pass=$_POST[pass];
	$login=mysqli_query($koneksidb,"SELECT * FROM user WHERE user='$user' AND pass='$pass'");
	$masukan=mysqli_num_rows($login);
	$x=mysqli_fetch_array($login);
//jika benar akan menuju home2.php jika salah akan menuju nganu.html

if($masukan == 1)

{
	session_start();
	$_SESSION[user]=$x[user];
	$_SESSION[pass]=$x[pass];

	header("Location:home.php");
}

else

{
	header("Location:nganu.html");
}

?>