<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from siswa,nilai where nisn='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>
<h1 style="text-align:center;color : white"> EDIT DATA SISWA </h1>
<html>
    <head>
    <style>

body {
  background-color: rgb(67,92,125);
}
</style>
</head>
    <body>
        
<form action="" method="post">
    <table align=center>
        <tr>
            <td width="130" style="color : white">nisn</td>
            <td><input type="text" name="nisn" value="<?php echo $data['nisn'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nama</id>
            <td><input type="text" name="nama" value="<?php echo $data ['nama'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">kelas</id>
            <td><input type="text" name="kelas" value="<?php echo $data ['kelas'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">mapel</id>
            <td><input type="text" name="mapel" value="<?php echo $data ['mapel'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai1</id>
            <td><input type="text" name="nilai1" value="<?php echo $data ['nilai1'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai2</id>
            <td><input type="text" name="nilai2" value="<?php echo $data ['nilai2'];?>"></td>
        </tr>
        <tr>
            <td style="color : white">nilai3</id>
            <td><input type="text" name="nilai3" value="<?php echo $data ['nilai3'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
</tr>
    </table>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update siswa set
    nama= '$_POST[nama]',
    kelas= '$_POST[kelas]'
    where nisn= '$_POST[nisn]'");

    if(isset($_POST['proses'])){
        mysqli_query($koneksi,"update nilai set
        mapel ='$_POST[mapel]',
        nilai1 ='$_POST[nilai1]',
        nilai2 ='$_POST[nilai2]',
        nilai3 ='$_POST[nilai3]'
        where SISWA_nisn ='$_POST[nisn]'");    

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='siswaa.php'>";
}
}
?>
</html>
</body>