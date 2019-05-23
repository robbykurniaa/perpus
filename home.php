 <!-- Masthead -->
   <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 >UPT Perpustakaan</h1>           
          </div>
        </div>
      </div>
</header>

<div class="container">
<table class="table table-bordered" id="example1">
    <thead style="background-color: #274472; color: #fff;">
    <h1> <center>Daftar Buku</center> </h1>
    <tr>
      <th>ID Buku</th>
      <th>Judul Buku </th>
      <th>Penerbit</th>
      <th>Nomor Rak</th>
    </tr>
     </thead>
  <tbody>
    <?php 
    include 'inc/koneksi.php';
    $no = 1;
    $data = mysqli_query($con,"select * from buku");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td width="5"><?php echo $no++; ?></td>
        <td><?php echo $d['judulbuku']; ?></td>
        <td><?php echo $d['penerbit']; ?></td>
        <td><?php echo $d['norak']; ?></td>
      </tr>
      <?php 
    }
    ?>
  </tbody>
</table>