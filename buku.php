<!-- Team -->
<section id="team" class="pb-5">
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
</section>

