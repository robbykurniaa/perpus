<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UPT Perpustakaan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

  </head>

  <body onload="initialize()">

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top" style="background-color: #999;">
      <div class="container">
        <img src="admin/img/logop2.png" width="80">
        <div class="form-inline">
        <a href="?page=home" class="btn btn-primary"><span class="fa fa-home"></span> Home</a>&nbsp;
        <a href="?page=buku" class="btn btn-primary"><span class="fa fa-address-book"></span> Daftar Buku</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="admin.php" class="btn btn-primary"><span class="fa fa-user-circle"></span> Sign Up</a>
        </div>
      </div>
    </nav>
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row purchace-popup">
           
          </div>
         
           <div class="container-fluid">
            <!--First row-->
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center;background-color: #fff;" >
                       <?php include"isi.php"; ?>
                    </div>
                </div>
            </div>
  

    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; 2019. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
