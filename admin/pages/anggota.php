<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <h2>Data Anggota</h2>
                    <hr>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#Modal_add">+ Tambah</button>
                    <br><br>
                    <table class="table table-bordered" id="example1">
                      <thead style="background-color: #274472; color: #fff;">
                        <tr>
                          <td width="5">
                            <b>ID Anggota</b>
                          </td>
                          <td>
                            <b>Nama Anggota</b>
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
                        $q=mysqli_query($con,"SELECT * FROM anggota");
                         while($b=mysqli_fetch_assoc($q)){
                        ?>
                        <tr>
                          <td><?php echo $b['idanggota'];?></td></td>
                          <td><?php echo $b['namaanggota'];?></td></td>
                          <td>
                            <a class="btn btn-primary btn-sm" href="index.php?page=edit_anggota&idanggota=<?php echo $b['idanggota']; ?>">
                            <i class="mdi mdi-pencil"></i>
                          </a>&nbsp;
                          <a class="btn btn-danger btn-sm" href="control/c_anggota.php?hapus=<?php echo $b['idanggota']; ?>" >
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
      <h3>Tambah Anggota</h3>
      </div>
      <div class="modal-body">
      <form method="post" action="control/c_anggota.php" enctype="multipart/form-data">
        <div class="form-group">
          <div class="col-md-6">
            <label>ID Anggota :</label>
              <input type="text" class="form-control" placeholder="ID Anggota"
              name="idanggota">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            <label>Nama Anggota :</label>
              <input type="text" class="form-control" placeholder="Nama Anggota"
              name="namaanggota">
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