<h3>TAMBAH BERITA</h3>

<form action="" method="POST">
    <table>
        <tr>
            <td width="130">NIP</td>
            <td><input type="number" name="nip"></td>
        </tr>
        <tr>
            <td width="130">NAMA</td>
            <td><input type="text" name="nama" placeholder="........."></td>
        </tr>
        <tr>
            <td width="130">JABATAN</td>
            <td><input type="text" name="jabatan"></td>
        </tr>
        <tr>
            <td width="130">MATA PELAJARAN</td>
            <td><input type="text" name="mapel"></td>
        </tr>
        <tr>
            <td width="130">KODE</td>
            <td><input type="text" name="kode"></td>
        </tr>
        <tr>
         <td><input type="submit" value="simpan" name="selesai"><td>
        </tr>
    </table>
</form>

<?php

include "koneksi.php";

 if(isset($_POST['selesai'])){
    mysqli_query($koneksi,"insert into guru set
    nip ='$_POST[nip]',
    nama ='$_POST[nama]',
    jabatan ='$_POST[jabatan]',
    kode ='$_POST[kode]'");

    if(isset($_POST['selesai'])){
        mysqli_query($koneksi,"insert into mapel set
        kode ='$_POST[kode]',
        namamapel ='$_POST[mapel]',
        guru ='$_POST[nama]',
        GURU_nip ='$_POST[nip]'");


    echo "<meta http-equiv=refresh content=1;URL='gurua.php'>";
    echo "Berita baru sudah diupload";

 }
}
?>