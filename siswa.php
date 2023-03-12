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
  <li  style="float: right;"><a href="home.php">LOG OUT</a></li>  
        <ul class="nav nav-pills nav-fill">
            <li><a href="home.php">HOME</a></li>
            <li><a href="siswa.php">DATA SISWA</a><li>
            <li><a href="guru.php">DATA GURU</a><li>
            <li><a href="nilai.php">NILAI SISWA</a><li>
            <li><a href="galeri.php">GALERI</a><li>
        </ul></b>
    </div>
    
    
    <table  border="1" style="background-color: white;" class="table table-dark table-striped-columns">
        <div>
        <tr align=center>
            <th>NO</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>TANGGAL LAHIR</th>
        
        </tr>
        <?php
 include "koneksi.php";
 include "session.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"SELECT * FROM siswa");
 while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$no</td>
    <td align=center>$tampil[nisn]</td>
    <td align=center>$tampil[nama]</td>
    <td align=center>$tampil[kelas]</td>
    <td align=center>$tampil[tanggallahir]</td>
  

    </tr>";
    $no++;
 }
 ?>
 <?php
if(isset($_GET['kode'])) {

    mysqli_query($koneksi, "delete from siswa where nisn='$_GET[kode]'");

    echo "<center>DATA TELAH DIHAPUS </center>"; 
    echo "<meta http-equiv=refresh content=1;URL='siswa.php'>";
}
?>
    </table>         
  </body>
</html>


 
