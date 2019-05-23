<?php
include"../inc/koneksi.php";
$id=$_GET['id'];
$q=mysqli_query($koneksi,"UPDATE pemesanan set status='selesai' WHERE id_pemesanan='$id'");
if ($q) {
	echo"<script>alert('berhasil');window.location=document.referrer;</script>";
}
?>