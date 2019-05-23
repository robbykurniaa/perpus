<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $id=$_POST['idanggota'];
  $nama=$_POST['namaanggota'];
  $query=mysqli_query($con,"INSERT INTO anggota VALUES('$id','$nama')");
  if ($query) {
    echo'<script>
						alert("Data berhasil disimpan");
						window.location=document.referrer;
			</script>';
  }
}

if (isset($_POST['edit'])) {
	$id=$_POST['idanggota'];
	$nama=$_POST['namaanggota'];
	$query=mysqli_query($con,"UPDATE anggota set namaanggota='$nama' WHERE idanggota='$id'");
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=anggota";</script>';
	}
}

if (isset($_GET['hapus'])) {
	$id=$_GET['hapus'];
	$query=mysqli_query($con,"DELETE FROM anggota WHERE idanggota='$id'");
	if ($query) {
		echo'<script>
						alert("Data berhasil dihapus");
						window.location=document.referrer;
			</script>';
	}
}

?>