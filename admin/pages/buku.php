<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <h2>Data Buku</h2>
                    <hr>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#Modal_add">+ Tambah</button>
                    <br><br>
                    <table class="table table-bordered" id="example1">
                      <thead style="background-color: #274472; color: #fff;">
                        <tr>
                          <td width="5">
                            <b>Nomor Buku</b>
                          </td>
                          <td>
                            <b>Judul Buku</b>
                          </td>
                          <td>
                            <b>Penerbit</b>
                          </td>
                          <td>
                            <b>Nomor Rak Buku</b>
                          </td>
                          <td>
                            <b>Action</b>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        include"../inc/koneksi.php";
                        $no=1;
                        $q=mysqli_query($con,"SELECT * FROM buku");
                         while($b=mysqli_fetch_assoc($q)){
                        ?>
                        <tr>
                          <td><?php echo $b['idbuku'];?></td></td>
                          <td><?php echo $b['judulbuku'];?></td></td>
                          <td><?php echo $b['penerbit'];?></td></td>
                          <td><?php echo $b['norak'];?></td></td>
                          <td>
                            <a class="btn btn-primary btn-sm" href="index.php?page=edit_anggota&idanggota=<?php echo $b['idanggota']; ?>">
                            <i class="mdi mdi-pencil"></i>
                          </a>&nbsp;
                          <a class="btn btn-danger btn-sm" href="control/c_buku.php?hapus=<?php echo $b['idbuku']; ?>" >
                            <i class="mdi mdi-delete"></i>
                          </a>
                          </td>
                        </tr>
                        <?php $no++;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>


<div id="Modal_add" class="modal fade" role="dialog">
  <div class="modal-dialog" style="border-radius:0px">
    <div class="modal-content" style="border-radius: 0px; width: 700px; background-color: #fff;">
      <div class="modal-header">
      <h3>Tambah Buku</h3>
      </div>
      <div class="modal-body">
      <form method="post" action="control/c_buku.php" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-6">
            <label>Nomor Buku</label>
              <input type="text" class="form-control" placeholder="ID BUKU"
              name="idbuku">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label>Judul Buku</label>
              <input type="text" class="form-control" placeholder="JUDUL BUKU"
              name="judulbuku">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label>Penerbit</label>
              <input type="text" class="form-control" placeholder="Penerbit"
              name="penerbit">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label>Nomor Rak Buku</label>
              <input type="text" class="form-control" placeholder="NOMOR RAK BUKU"
              name="norak">
          </div>
        </div>
        <div class="form-group">
        <div class="form-group">
          <div class="col-md-6">
            <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>