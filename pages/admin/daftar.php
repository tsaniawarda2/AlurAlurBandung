<?php
require '../functions.php';

$lpr_user = query("SELECT users.id_user, nama FROM users");
var_dump($lpr_user)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../assets/img/L-Aps1Warna.svg" type="image/x-icon" />
  <title>L-Apss</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../../assets/css/main.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="index.html">
        <img src="../../assets/img/L-Aps1Warna.svg" alt="logo" id="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item">
          <a href="index.html">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22">
                <path d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
              </svg>
            </span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-item-has-children">
          <a href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
              </svg>
            </span>
            <span class="text">Laporan User</span>
          </a>
          <ul id="ddmenu_2" class="collapse show dropdown-nav">
            <li>
              <a href="daftar.php" class="active"> Daftar </a>
            </li>
            <li>
              <a href="create.html"> Laporan Baru</a>
            </li>
            <li>
              <a href="cetak.html"> Cetak Laporan </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>
  <div class="overlay"></div>
  <!-- ======== sidebar-nav end =========== -->

  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
              <div class="menu-toggle-btn mr-20">
                <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                  <i class="lni lni-chevron-left me-2"></i> Menu
                </button>
              </div>
              <div class="header-search d-none d-md-flex">
                <form action="#">
                  <input type="text" placeholder="Search..." />
                  <button><i class="lni lni-search-alt"></i></button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">
              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <h6>John Doe</h6>
                      <div class="image">
                        <img src="../../assets/img/profile/profile-image.png" alt="" />
                        <span class="status"></span>
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="#0">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="#0">
                      <i class="lni lni-alarm"></i> Notifications
                    </a>
                  </li>
                  <li>
                    <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                  </li>
                  <li>
                    <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                  </li>
                  <li>
                    <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- ========== header end ========== -->

    <!-- ========== table components start ========== -->
    <section class="table-components">
      <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h2>Laporan User</h2>
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
              <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="#0">Laporan User</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Daftar
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper">
          <div class="row ">
            <div class="col-lg-12 ">
              <div class="card-style mb-30">
                <h6 class="mb-10">Data Laporan</h6>
                <p class="text-sm mb-20">
                  For basic styling—light padding and only horizontal
                  dividers—use the class table.
                </p>
                <div class="table-wrapper table-responsive">
                  <table class="table container-fluid">
                    <thead>
                      <tr>
                        <th>
                          <h6>No</h6>
                        </th>
                        <th>
                          <h6>Nama</h6>
                        </th>
                        <th>
                          <h6>Action</h6>
                        </th>
                      </tr>
                      <!-- end table row-->
                    </thead>
                    <tbody>
                      <?php $no = 1;
                      foreach ($lpr_user as $lu) :
                      ?>
                        <tr>
                          <td class="min-width">
                            <p><?= $no++; ?></p>
                          </td>
                          </td>
                          <td class="min-width">
                            <p><?= $lu['nama']; ?></p>
                          </td>
                          <td id="act-icon">
                            <div class="action">
                              <a href="detail.php?id=<?= $lu['id_user']; ?>">
                                <button class="text-success">
                                  <i class="fa-solid fa-eye" id="eye"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                      <!-- end table row -->
                    </tbody>
                  </table>
                  <!-- end table -->
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>

          <!-- end row -->
        </div>
        <!-- ========== tables-wrapper end ========== -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== table components end ========== -->

    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">
            <div class="copyright text-center text-md-start">
              <p class="text-sm">
                Designed and Developed by
                <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                  PlainAdmin
                </a>
              </p>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-6">
            <div class="terms d-flex justify-content-center justify-content-md-end">
              <a href="#0" class="text-sm">Term & Conditions</a>
              <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
            </div>
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </footer>
    <!-- ========== footer end =========== -->
  </main>
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->
  <script src="../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/js/Chart.min.js"></script>
  <script src="../../assets/js/dynamic-pie-chart.js"></script>
  <script src="../../assets/js/moment.min.js"></script>
  <script src="../../assets/js/fullcalendar.js"></script>
  <script src="../../assets/js/jvectormap.min.js"></script>
  <script src="../../assets/js/world-merc.js"></script>
  <script src="../../assets/js/polyfill.js"></script>
  <script src="../../assets/js/main.js"></script>
</body>

</html>