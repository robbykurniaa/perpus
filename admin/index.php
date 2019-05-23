<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UPT Perpustakaan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">\
  <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/DataTables/media/js/jquery.dataTables.min.js"></script>
  <script src="assets/DataTables/media/js/dataTables.bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets2/tab/css/style.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="img/logop2.png" />

  <style type="text/css">
    .form-control-sm{
      border:1.5px solid #a5a6a5;
      height: 30px;
    }
    .form-control{
      border:1.5px solid #a5a6a5;
    }
    .preloader{
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading{
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font:14px arial;
    }
  </style>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".preloader").fadeOut();
    });
  </script>
</head>
<body>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"> 
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="assets/images/logo-mini.svg" alt="logo"/>
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center" style="background-color:#274472;">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">UPT Perpustakaan</span>
              <img class="img-xs rounded-circle" src="img/logop2.png" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-6 d-flex align-items-center justify-content-center">
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="../index.php">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <img src="img/logop2.png" alt="logo" style="height: 80px;" />
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=anggota">
              <i class="menu-icon mdi mdi-plus"></i>
              <span class="menu-title">Tambah Anggota</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=buku">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Tambah Buku</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="?page=status">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Status</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <?php include"konten.php";?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="http://www.bootstrapdash.com/" target="_blank"></span>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script>
   $(document).ready(function(){
      $("#example1").DataTable({
        "language":{
          "search":"Search :",
          "lengthMenu":"Tampilkan _MENU_ baris",
          "zeroRecords":"Maaf Data Tidak Ditemukan",
          "info":"Halaman _PAGE_ dari _PAGES_",
          "sInfoEmpty":"Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)"
        }
      });
      $("#example2").DataTable({
        "language":{
          "search":"Cari :",
          "lengthMenu":"Tampilkan _MENU_ baris",
          "zeroRecords":"Maaf Data Tidak Ditemukan",
          "info":"Halaman _PAGE_ dari _PAGES_",
          "sInfoEmpty":"Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)"
        }
      });
      $("#example3").DataTable({
        "language":{
          "search":"Cari :",
          "lengthMenu":"Tampilkan _MENU_ baris",
          "zeroRecords":"Maaf Data Tidak Ditemukan",
          "info":"Halaman _PAGE_ dari _PAGES_",
          "sInfoEmpty":"Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)"
        }
      });
      $("#example4").DataTable({
        "language":{
          "search":"Cari :",
          "lengthMenu":"Tampilkan _MENU_ baris",
          "zeroRecords":"Maaf Data Tidak Ditemukan",
          "info":"Halaman _PAGE_ dari _PAGES_",
          "sInfoEmpty":"Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)"
        }
      });
      $("#example5").DataTable({
        "language":{
          "search":"Cari :",
          "lengthMenu":"Tampilkan _MENU_ baris",
          "zeroRecords":"Maaf Data Tidak Ditemukan",
          "info":"Halaman _PAGE_ dari _PAGES_",
          "sInfoEmpty":"Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)"
        }
      });
   });
</script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
  <link rel="stylesheet" href="assets2/tab/js/index.js">
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>