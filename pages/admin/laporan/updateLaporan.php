<?php
require '../../functions.php';

session_start();
if (isset($_SESSION['idUser'])) {
  header("Location: ../../../index.php");
  exit;
}

// Ambil data di URL
$id = $_GET['id'];

$lpr_doc = query("SELECT users.id_user, foto_profile, nama, unit_kerja, jabatan, laporan.laporan_id, tanggal_tahun, waktu_mulai, waktu_selesai, keterangan, uraian_kegiatan FROM users, laporan WHERE laporan.laporan_id = $id AND users.id_user = laporan.id_user");

if (isset($_POST["update"])) {
  if (updateLaporan($id, $_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'daftar.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('Data gagal diubah!');
      document.location.href = 'daftar.php';
    </script>
    ";
  }
}

$id = $_SESSION['idAdmin'];
$user = query("SELECT * FROM users WHERE users.id_user='$id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../../assets/img/L-Aps1Warna.svg" type="image/x-icon" />

  <title>L-Apss</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../../../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../../assets/css/main.css" />
  <link rel="stylesheet" href="../../../assets/css/laporan.css" />

  <!-- Hidden Textarea -->
  <script language="javascript" type="text/javascript">
    function toggleMe(val) {
      var ketCode = document.getElementById('ketCode');

      if (val == 'Sakit') {
        ketCode.style.display = "none";
      } else {
        ketCode.style.display = "block";

      }
    }
  </script>
</head>

<body>
  <!-- ======== sidebar-nav start =========== -->
  <aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
      <a href="../index.php">
        <img src="../../../assets/img/L-Aps1Warna.svg" alt="logo" id="logo" />
      </a>
    </div>
    <nav class="sidebar-nav">
      <ul>
        <li class="nav-item">
          <a href="../dataAdmin.php">
            <span class="icon">
              <i class="lni lni-user" id="person"></i>
            </span>
            <span class="text">Data Admin</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="../du/index.php">
            <span class="icon">
              <i class="lni lni-users" id="person"></i>
            </span>
            <span class="text">Data User</span>
          </a>
        </li>
        <li class="nav-item active">
          <a href="../laporan/daftar.php">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
              </svg>
            </span>
            <span class="text">Laporan User</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="../dokumen/datadokumen.php">
            <span class="icon">
              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z" />
              </svg>
            </span>
            <span class="text">Data Dokumen</span>
          </a>
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
                      <h6><?= $user['nama']; ?></h6>
                      <div class="image">
                        <img src="../../../assets/img/<?= $user['foto_profile']?>"/>
                        <span class="status"></span>
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="../../profile.php">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="../../../index.php">
                      <i class="lni lni-home"></i>User Page
                    </a>
                  </li>
                  <li>
                    <a href="../../logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
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

    <!-- ========== section start ========== -->
    <section class="section">
      <div class="container">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="titlemb-30">
                <h2>Edit Laporan</h2>
              </div>
            </div>
            <!-- end col -->
            <div class="col-md-6">
              <div class="breadcrumb-wrapper mb-30">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="daftar.php">Laporan User</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="daftar.php">Daftar</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="detail.php?id=<?= $lpr_doc['id_user']; ?>"">Detail</a>
                    </li>
                    <li class=" breadcrumb-item active" aria-current="page">
                        Edit
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

        <div class="row">
          <!-- Profile -->
          <div class="col-lg-6">
            <div class="card-style settings-card-1 mb-30">
              <div class="title mb-30 d-flex justify-content-between align-items-center">
                <h6>Info Profile</h6>
              </div>
              <div class="profile-info">
                <div class="d-flex align-items-center justify-content-center mb-30">
                  <div class="profile-image text-center">
                    <?php
                    if ($lpr_doc['foto_profile'] === "") {
                    ?>
                      <img src="../../../assets/img/no-photo.png">
                    <?php } else {; ?>
                      <img src=" ../../../assets/img/<?= $lpr_doc['foto_profile']; ?>">
                    <?php } ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">

                    <div class="input-style-1">
                      <label>Nama</label>
                      <input type="text" value="<?= $lpr_doc['nama']; ?>" disabled />
                    </div>
                    <div class="input-style-1">
                      <label>Jabatan</label>
                      <input type="text" value="<?= $lpr_doc['jabatan']; ?>" disabled />
                    </div>
                    <div class="input-style-1">
                      <label>Unit Kerja</label>
                      <input type="text" value="<?= $lpr_doc['unit_kerja']; ?>" disabled />
                    </div>
                  </div>
                </div>
                <!-- ========== button back ========== -->
                <div class="btn-back text-center">
                  <a href="detail.php?id=<?= $lpr_doc['id_user']; ?>" class="btn btn-primary" id="btnBack">Kembali
                  </a>
                </div>
              </div>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->

          <!-- Laporan -->
          <div class="col-lg-6">
            <div class="card-style settings-card-2 mb-30">
              <div class="title mb-30">
                <h6>Buat Laporan</h6>
              </div>
              <form action="" method="post">
                <div class="row">
                  <!-- Id (Hidden) -->
                  <input type="hidden" value="<?= $lpr_doc['laporan_id']; ?>" disabled />
                  <!-- Tanggal & Tahun -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Input Tanggal dan Tahun</label>
                      <input type="date" name="tanggal_tahun" placeholder="Input Tanggal dan Tahun" value="<?= $lpr_doc['tanggal_tahun']; ?>" />
                    </div>
                  </div>
                  <!-- Lama Kerjaan -->
                  <div class="col-6 col-xxl-6">
                    <div class="input-style-1">
                      <label>Lama Kerjaan</label>
                      <input type="time" name="waktu_mulai" placeholder="Waktu Awal" value="<?= $lpr_doc['waktu_mulai']; ?>" />
                    </div>
                  </div>
                  <div class="col-6 col-xxl-6">
                    <div class="input-style-1">
                      <label id="noLabel">""</label>
                      <input type="time" name="waktu_selesai" placeholder="Waktu Akhir" value="<?= $lpr_doc['waktu_selesai']; ?>" />
                    </div>
                  </div>
                  <!-- Keterangan -->
                  <div class="col-12">
                    <div class="select-style-1">
                      <label for="keterangan">Keterangan</label>
                      <select name="keterangan" class="form-select" onchange="toggleMe(this.value)" required>
                        <option value="Pilih Keterangan">Pilih Keterangan</option>
                        <option value="Masuk" <?php
                                              if ($lpr_doc['keterangan'] == 'Masuk') {
                                                echo 'selected';
                                              };
                                              ?>>Masuk</option>
                        <option value="Izin" <?php
                                              if ($lpr_doc['keterangan'] == 'Izin') {
                                                echo 'selected';
                                              };
                                              ?>>Izin</option>
                        <option value="Dinas Luar" <?php
                                                    if ($lpr_doc['keterangan'] == 'Dinas Luar') {
                                                      echo 'selected';
                                                    };
                                                    ?>>Dinas Luar</option>
                        <option value="Sakit" <?php
                                              if ($lpr_doc['keterangan'] == 'Sakit') {
                                                echo 'selected';
                                              };
                                              ?>>Sakit</option>
                      </select>
                    </div>
                  </div>
                  <!-- Uraian Kegiatan -->
                  <div class="col-12">
                    <div class="form-group" name="ketCode" id="ketCode">
                      <label for="uraian_kegiatan">Uraian Kegiatan</label>
                      <textarea class="form-control" name="uraian_kegiatan" id="uraian_kegiatan" rows="3"><?= $lpr_doc['uraian_kegiatan']; ?></textarea>
                    </div>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" name="update" class="btn btn-success" id="btnTambah">
                      Simpan Perubahan
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">
            <div class="copyright text-center text-md-start">
              <p class="text-sm">
                Copyright © 2022 L-Apps
              </p>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-6">
            <div class="terms d-flex justify-content-center justify-content-md-end">
              <a href="#0" class="text-sm">All Right Reserved.</a>
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
  <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/js/Chart.min.js"></script>
  <script src="../../../assets/js/dynamic-pie-chart.js"></script>
  <script src="../../../assets/js/moment.min.js"></script>
  <script src="../../../assets/js/fullcalendar.js"></script>
  <script src="../../../assets/js/jvectormap.min.js"></script>
  <script src="../../../assets/js/world-merc.js"></script>
  <script src="../../../assets/js/polyfill.js"></script>
  <script src="../../../assets/js/main.js"></script>
</body>

</html>