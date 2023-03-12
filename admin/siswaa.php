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
  <li  style="float: right;"><a href="logout.php">LOG OUT</a></li>  
        <ul class="nav nav-pills nav-fill">
            <li><a href="homea.php">MANAJEMEN ADMIN</a></li>
            <li><a href="siswaa.php">MANAJEMEN SISWA</a><li>
            <li><a href="gurua.php">MANAJEMEN GURU</a><li>
            <li><a href="nilaia.php">MANAJEMEN NILAI</a><li>
        </ul></b>
    </div>
    
    
    <table  border="1" style="background-color: white; text-align: center;" class="table table-dark table-striped-columns">
        <div>
        <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>HARIAN</th>
            <th>NILAI1</th>
            <th>NILAI2</th>
            <th>GRADE</th>
            <th colspan="2">ACTION</th>
        
        </tr>
        <?php
 include "koneksi.php";
 include "session.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"SELECT * FROM vsiswa");
 while ($tampil = mysqli_fetch_array($ambildata)){
    $n1 = $tampil['nilai1'];
    $n2 = $tampil['nilai2'];
    $n3 = $tampil['nilai3'];
    $rata = ($n1 + $n2 + $n3) /3;
    if ($rata >= 90 && $rata <= 100){
        $grade = "A";
    }elseif ($rata >= 70 & $rata <= 90){
        $grade = "B";
    }elseif ($rata >= 50 & $rata <= 70){
        $grade = "C";
    }
    echo"
    <tr>
    <td>$no</td>
    <td align=center>$tampil[nisn]</td>
    <td align=center>$tampil[nama]</td>
    <td align=center>$tampil[kelas]</td>
    <td>$tampil[nilai1]</td>
    <td>$tampil[nilai2]</td>
    <td>$tampil[nilai3]</td>
    <td>$grade</td>
    <td><a href='?kode=$tampil[nisn]'>hapus</a></td>
    <td><a href='ubahsiswa.php?kode=$tampil[nisn]'>ubah</a></td>
  

    </tr>";
    $no++;
 }
 ?>
 <?php
if(isset($_GET['kode'])) {

    mysqli_query($koneksi, "delete from siswa where nisn='$_GET[kode]'");

    echo "<center>DATA TELAH DIHAPUS </center>"; 
    echo "<meta http-equiv=refresh content=1;URL='siswaa.php'>";
}
?>
    </table>         
    <a class="btn btn-outline-light"  href="tambahsiswa.php" role="button"style="margin-left: 600px; ">Tambah data</a>
  </body>
</html>


 
