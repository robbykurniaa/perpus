<?php
include"../inc/koneksi.php";
if (isset($_POST['simpan'])) {
  $id=$_POST['idbuku'];
  $judul=$_POST['judulbuku'];
  $terbit=$_POST['penerbit'];
  $norak1=$_POST['norak'];
  $query=mysqli_query($con,"INSERT INTO buku VALUES('$id','$judul','$terbit','$norak1')");
  if ($query) {
    echo'<script>
						alert("Data berhasil disimpan");
						window.location=document.referrer;
			</script>';
  }
}

if (isset($_POST['edit'])) {
  $id=$_POST['idbuku'];
  $judul=$_POST['judulbuku'];
  $terbit=$_POST['penerbit'];
  $norak1=$_POST['norak'];
	$query=mysqli_query($con,"UPDATE buku set judulbuku='$judul', penerbit='$terbit', norak='$norak1' WHERE idbuku='$id'");
	if ($query) {
		echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=anggota";</script>';
	}
}

if (isset($_GET['hapus'])) {
	$id=$_GET['hapus'];
	$query=mysqli_query($con,"DELETE FROM buku WHERE idbuku='$id'");
	if ($query) {
		echo'<script>
						alert("Data berhasil dihapus");
						window.location=document.referrer;
			</script>';
	}
}

?>