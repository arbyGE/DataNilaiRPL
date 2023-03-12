<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from siswa where nisn='$_GET[kode]'");
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
            <td style="color : white">tanggallahir</id>
            <td><input type="date" name="tanggallahir" value="<?php echo $data ['tanggallahir'];?>"></td>
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
    kelas= '$_POST[kelas]',
    tanggallahir= '$_POST[tanggallahir]'
    where nisn= '$_POST[nisn]'");

    echo "Data Tersimpan";
    echo "<meta http-equiv=refresh content=0;URL='siswaa.php'>";
}
?>
</html>
</body>