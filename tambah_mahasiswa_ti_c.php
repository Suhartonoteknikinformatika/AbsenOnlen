<?php

include "loading.php";

  $select="select * from ti_c";
//$perintah=mysql_query($query);
  $perintah=mysqli_query($koneksidb,$select);

?>


<html>
  <head>
    <title>Tambah Mahasiswa</title>
  </head>
  <body bgcolor='pink'>
    <a href="home_ti_c.php">Kembali ke tabel</a>
    <h2>Tambah Mahasiswa</h2>
    <form method="post" action="loading_tambah_mahasiswa_ti_c.php">
    
    <table border="0">
    <tr>
      <td>Nim</td><td>:</td>
      <td><input name="nim" type="text" size="20"></td>
    </tr>
    <tr>
      <td>Nama</td><td>:</td>
      <td><input name="nama" type="text" size="50"></td> 
    </tr>
    <tr>
      <td>&nbsp;</td><td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Tambah">
          <input type="reset" name="Reset" value="Batal"></td>
    </tr>
    </table>
    
    </form>
  </body>
</html>
