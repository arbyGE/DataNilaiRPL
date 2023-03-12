<?php
session_start();
include "koneksi.php";
?>
    <link rel="stylesheet" href="style.css">
    <body>
    <div class="center">
        <h1>LOGIN</h1>
        <form action="ceklogin.php" method="post">
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Username: </label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password">
                <span></span>
                <label>Password: </label>
            </div>
            <input type="submit" value="Login" name="proseslog">
            <h4><a href="home.php">HALAMAN UTAMA</a></h4>
        </form>
    </div>

<?php
if(isset($_POST{'proseslog'})) {
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='homea.php'>";

    }else{
        echo "<p align=center><b> Username atau Password salah</b></p>";
        echo  "<meta http-equiv=refresh content=1;URL='login.php'>";
    }
} 