<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="search copy.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA RPL</title>
</head>
<body>
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
    <table class="table table-dark table-striped-columns">
        <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>MAPEL</th>
            <th>HARIAN</th>
            <th>PAT</th>
            <th>UAS</th>
            <th>RATA RATA</th>
            <th>GRADE</th>
        </tr>
        <?php
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi,"SELECT * FROM vrata");
        while ($tampil = mysqli_fetch_array($ambildata)){
            $n1 = $tampil['nilai1'];
            $n2 = $tampil['nilai2'];
            $n3 = $tampil['nilai3'];
            $rata = ($n1 + $n2 + $n3) /3;
            if ($rata >= 90 & $rata <= 100){
                $grade = "A";
            }elseif ($rata >= 70 & $rata <= 90){
                $grade = "B";
            }elseif ($rata >= 0 & $rata <= 70){
                $grade = "C";
            }
            echo"
            <tr>
            <td>$no</td>
            <td>$tampil[nisn]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[mapel]</td>
            <td>$tampil[ratrata]</td>
            <td>$grade</td>
            </tr>";
            $no++;
         }
          ?>

    </table>
</body>
</html>