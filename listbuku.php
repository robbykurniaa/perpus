<section id="team" class="pb-5">
    <div class="container">
    <br><br><br>
        <h5 class="section-title h1">Data Perumahan</h5>
        <hr>
        <div class="row">
            <!-- Team member -->
            <?php
            include"inc/koneksi.php";
            $query=mysqli_query($con,"SELECT * FROM perumahan");
            while($r=mysqli_fetch_array($query)){
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img style="width: 100%; height: 300px;" class=" img-fluid" src="upload/<?php echo $r['gambar'];?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $r['nama_perumahan'];?></h4>
                                    <table class="table table-bordered">
                                    <tr>
                                        <th>Type</th>
                                        <td align="left">: <?php echo $r['tipe'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Atap</th>
                                        <td align="left">: <?php echo $r['atap'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Dinding</th>
                                        <td align="left">: <?php echo $r['dinding'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Pondasi</th>
                                        <td align="left">: <?php echo $r['pondasi'];?></td>
                                    </tr>
                                    </table>
                                    <a href="login.html" style="width: 100px" class="btn btn-primary btn-sm">Booking</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- ./Team member -->
            <!-- Team member -->

        </div>
    </div>
</section>