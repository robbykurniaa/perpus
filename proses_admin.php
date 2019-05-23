<?php
include"inc/koneksi.php";
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
	$cek=mysqli_num_rows($q);
	if ($cek>0) {
		echo '<script>alert("berhasil");window.location.href="admin/index.php";</script>';
	}else{
		echo"<script>alert('username atau password salah');window.location=document.referrer;</script>";
	}
}
?>