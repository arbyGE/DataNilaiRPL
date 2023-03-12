<h3>TAMBAH SISWA</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="130">NISN</td>
            <td><input type="number" name="nisn"></td>
        </tr>
        <tr>
            <td width="130">NAMA</td>
            <td><input type="text" name="nama" placeholder="........."></td>
        </tr>
        <tr>
            <td width="130">MAPEL</td>
            <td><input type="text" name="mapel" placeholder="........."></td>
        </tr>
        <tr>
            <td width="130">HARIAN</td>
            <td><input type="text" name="nilai1"></td>
        </tr>
        <tr>
            <td width="130">PAT</td>
            <td><input type="text" name="nilai2"></td>
        </tr>
        <tr>
            <td width="130">UAS</td>
            <td><input type="text" name="nilai3"></td>
        </tr>
        <tr>
         <td><input type="submit" value="simpan" name="selesai"><td>
        </tr>
    </table>
</form>

<?php

include "koneksi.php";

 if(isset($_POST['selesai'])){
    mysqli_query($koneksi,"insert into siswa set
    nisn ='$_POST[nisn]',
    nama ='$_POST[nama]'");


    if(isset($_POST['selesai'])){
        mysqli_query($koneksi,"insert into nilai set
        nisn ='$_POST[nisn]',
        mapel ='$_POST[mapel]',
        nilai1 ='$_POST[nilai1]',
        nilai2 ='$_POST[nilai2]',
        nilai3 ='$_POST[nilai3]'");

    echo "<meta http-equiv=refresh content=1;URL='nilaia.php'>";
    echo "Berita baru sudah diupload";

 }
}
?>