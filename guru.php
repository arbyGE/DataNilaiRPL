<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="search copy.css">
    <title>DATA RPL</title>
    <style>
      span{
      color: white;
      }
    </style>
</head>
<body  class="bg-secondary" class="container">
<b>
  <div class="menu">
  <li  style="float: right;"><a href="login.php">LOG OUT</a></li>  
        <ul class="nav nav-pills nav-fill">
            <li><a href="home.php">HOME</a></li>
            <li><a href="siswa.php">DATA SISWA</a><li>
            <li><a href="guru.php">DATA GURU</a><li>
            <li><a href="nilai.php">NILAI SISWA</a><li>
            <li><a href="galeri.php">GALERI</a><li>
        </ul></b>
        
    </div>
    
    <table  border="1" align=center style="background-color: white;" class="table table-dark table-striped-columns">
        <div>
        <tr>
            <th>NO</th>
            <th>NIP</th>
            <th>NAMA</th>
            <th>JABATAN</th>
            <th>MATA PELAJARAN</th>
        </tr>
        <?php
 include "koneksi.php";
 $no = 1;
 $ambildata = mysqli_query($koneksi,"SELECT * FROM vguru");
 while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$no</td>
    <td>$tampil[nip]</td>
    <td>$tampil[nama]</td>
    <td>$tampil[jabatan]</td>
    <td>$tampil[namamapel]</td>

    </tr>";
    $no++;
 }
 ?>
    </table>         
  </body>
</html>


 
