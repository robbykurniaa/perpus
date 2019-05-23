<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <br><br>
                    <table class="table table-bordered" id="example1">
                      <thead style="background-color: #274472; color: #fff;">
<?php
include"../inc/koneksi.php";
@$id=$_GET['idbuku'];
$q=mysqli_query($con,"SELECT * FROM buku WHERE idbuku='$id'");
$r=mysqli_fetch_array($q);
if (isset($_POST['edit'])) {
  $id=$_POST['idbuku'];
  $judul=$_POST['judulbuku'];
  $query=mysqli_query($con,"UPDATE buku set idbuku='$id',judulbuku='$judul' WHERE idbuku='$id'");
  if ($query) {
    echo'<script>alert("Data Berhasil Disimpan"); parent.location="?page=buku";</script>';
  }
}
?>

<section class="portfolio" id="portfolio">
    <div class="container-fluid">
    <div class="col-md-12" style="box-shadow:0px 2px 2px 2px rgba(0,0,0,0.15);border-radius: 5px; ">
      <br>
      <h2><font face="verdana">Ubah Buku</font></h2>
      <hr>
      <div class="col-md-8">
        <form method="post" action="">
          <input type="text"  class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="idbuku" value="<?php echo $id;?>"><br>
          <input type="text" class="form-control" style="height: 50px;width:500px;border:1px solid #999" name="judulbuku" value="<?php echo $r['judulbuku'];?>"><br>
        <br>
          <button class="btn btn-primary btn-lg" type="submit" name="edit">Simpan</button>
        </form>
      </div>
      <br><br>
    </div>
  </div>
</section>