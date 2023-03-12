<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['pengguna']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['pengguna'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:/ndatarpl/admin/homea.php");
 
	// cek jika user login sebagai siswa
	}else if($data['pengguna']=="siswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['pengguna'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:/ndatarpl/siswa/homea.php");
 
	// cek jika user login sebagai guru
	}else if($data['pengguna']=="guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['pengguna'] = "guru";
		// alihkan ke halaman dashboard guru
		header("location:/ndatarpl/guru/homea.php");
 
	}else{
		echo "<meta http-equiv=refresh content=0;URL='admin/homea.php'>";
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>