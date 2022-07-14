<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>LApps</title>

  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" />

  <!-- Add custom CSS here -->
  <link href="../../assets/css/sb-admin.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/font-awesome/css/font-awesome.min.css" />

  <!-- Icon -->
  <link rel="icon" href="../../assets/img/LApssGradasi.png" class="responsive-img" />
</head>

<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="../../assets/img/LApssGradasi.svg" width="40px" alt="" /></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <li>
            <a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-files-o"></i> Laporan User <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="?page=laporan"> <i class="fa fa-list-ul"></i> Daftar</a>
              </li>
              <li>
                <a href="?page=tambah">
                  <i class="fa fa-plus"></i> Tambah Laporan Baru</a>
              </li>
              <li>
                <a href="#"> <i class="fa fa-print"></i> Cetak Laporan</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a href="#"><i class="fa fa-user"></i> Profile</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-envelope"></i> Inbox
                  <span class="badge">7</span></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-gear"></i> Settings</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#"><i class="fa fa-power-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
      <?php
      if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
        include "views/dashboard.php";
      } else if (@$_GET['page'] == 'laporan' || @$_GET['page'] == '') {
        include "views/laporan.php";
      } else if (@$_GET['page'] == 'tambah' || @$_GET['page'] == '') {
        include "views/tambah.php";
      }

      ?>
    </div>
    <!-- /#page-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="../../assets/js/jquery-1.10.2.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>

  <!-- Page Specific Plugins -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
  <script src="../../assets/js/morris/chart-data-morris.js"></script>
  <script src="../../assets/js/tablesorter/jquery.tablesorter.js"></script>
  <script src="../../assets/js/tablesorter/tables.js"></script>
</body>

</html>