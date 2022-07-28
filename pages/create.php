<?php
require './functions.php';

// $id = $_GET['id'];
$id = 1;
$lpr_user = query("SELECT * FROM users WHERE users.id_user = '$id'");

if (isset($_POST['create'])) {
  // var_dump($_POST);
  if (createLaporan($id, $_POST) > 0) {
    echo "<script>
            alert('Data Laporan Berhasil Ditambahkan!');
            document.location.href = '../index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Laporan Gagal Ditambahkan!');
            document.location.href = '../index.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../assets/img/L-Aps1Warna.svg" type="image/x-icon" />

  <title>L-Apss</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/css/laporan.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />

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

<body class="buat">

  <!-- Navbar -->
  <nav class="fixed-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="../assets/img/LapssPUTIH.svg" alt="" style="height: 30px;" class="img-logo">
      <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
      <div class="nav">
        <a href="./profile.php" class="nav-prof">Profile</a>
        <a href="./login.php" id="loginBtn">Login</a>
      </div>
    </div>
  </nav>
  <!-- ========== section start ========== -->
  <section class="section">
    <div class="container container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper" id="bodyLpr">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="titlemb-30 mb-4">
              <h2 id="title">Buat Laporan</h2>
            </div>
          </div>

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
                  <img src="../assets/img/<?= $lpr_user['foto_profile']; ?>" alt="foto_user" />
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="input-style-1">
                    <label>Nama</label>
                    <input type="text" value="<?= $lpr_user['nama']; ?>" disabled />
                  </div>
                  <div class="input-style-1">
                    <label>Jabatan</label>
                    <input type="text" value="<?= $lpr_user['jabatan']; ?>" disabled />
                  </div>
                  <div class="input-style-1">
                    <label>Unit Kerja</label>
                    <input type="text" value="<?= $lpr_user['unit_kerja']; ?>" disabled />
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-back text-center">
              <a href="../index.php" class="btn btn-primary" id="btnBack">Kembali
              </a>
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->

        <!-- Laporan -->
        <div class="col-lg-6">
          <div class="card-style settings-card-2 mb-30">
            <div class="title mb-30">
              <h6>Form Laporan Baru</h6>
            </div>
            <form action="" method="POST">
              <div class="row">

                <!-- Inputan -->
                <div class="col m6 s12">
                  <div class="card-panel inputan">

                    <div class="input-style-1">
                      <label for="tanggal_tahun">Input Tanggal dan Tahun</label>
                      <input type="date" name="tanggal_tahun" id="tanggal_tahun" required autofocus>
                    </div>

                    <div class="input-style-1">
                      <label for="waktu_mulai">Lama Kerjaan</label>
                      <input type="time" name="waktu_mulai" id="waktu_mulai" required>
                    </div>
                    <div class="input-style-1">
                      <input type="time" name="waktu_selesai" id="waktu_selesai" required>
                      <label for="waktu_selesai"></label>
                    </div>

                    <div class="input-style-1">
                      <label for="keterangan">Keterangan</label>
                      <select name="keterangan" class="form-select" onchange="toggleMe(this.value)" required>
                        <option value="">Pilih Keterangan</option>
                        <option value="Masuk">Masuk</option>
                        <option value="Izin">Izin</option>
                        <option value="Dinas Luar">Dinas Luar</option>
                        <option value="Sakit">Sakit</option>
                      </select>
                    </div>

                    <div class="form-group" name="ketCode" id="ketCode">
                      <label for="uraian_kegiatan">Uraian Kegiatan</label>
                      <textarea class="form-control" name="uraian_kegiatan" id="uraian_kegiatan" rows="3"></textarea>
                    </div>
                    <div class="tombol text-center">
                      <div class="container">
                        <button class="
                          btn btn-success" type="submit" name="create" id="btnTambah">Tambah</button>
                        <button class=" btn btn-danger" type="reset" id="btnReset">
                          Reset
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </form>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

      <!-- ========== button back ========== -->


    </div>
    <!-- end container -->
  </section>
  <!-- ========== section end ========== -->

  <!-- ========== footer start =========== -->
  <footer class="footer text-center text-lg-start text-white" style="background-color: #063554">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between" style="background-color: white;"></section>

    <!-- Section: Links  -->
    <section class="d-flex justify-content-between">
      <div class="container footer-content text-center text-md-start mt-4">
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <!-- <h6 class="text-uppercase fw-bold">About Lapps</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px;"/> -->
            <div class="footer-logo mb-2">
              <img src="./assets/img/LapssPUTIH.svg" alt="" height="30px">
            </div>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px" />
            <p>
              Jl. Kolonel Masturi No.01, Cipageran, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40511
            </p>
            <p>
              <i class="fas fa-envelope mr-3"></i> bpsdm@jabarprov.go.id
            </p>
            <p>
              <i class="fas fa-phone mr-3"></i> (022) 7301440
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-0 contact">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Social Network</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px" />
            <div class="circle-sos">
              <p>
                <a href="https://instagram.com/bpsdmjabar"><i class="fab fa-instagram"></i> bpsdmjabar</a>
              </p>
              <p>
                <a href="https://twitter.com/bpsdmjabar"><i class="fab fa-twitter"></i>bpsdmjabar</a>
              </p>
              <p>
                <a href="https://www.youtube.com/c/BpsdmJabar"><i class="fab fa-youtube"></i>BPSDM JABAR</a>
              </p>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Explore</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px" />
            <p>
              <a href="https://bpsdm.jabarprov.go.id/" class="text-white text-explore">BPPSDM</a>
            </p>
            <p>
              <a href="https://elearning.bpsdm.jabarprov.go.id/" class="text-white text-explore">E-learning BPPSDM</a>
            </p>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3 footer">
      Copyright © 2020 L-Apps | All Right Reserved.
    </div>
    <!-- Copyright -->

  </footer>
  <!-- ========== footer end =========== -->
  <!-- </main> -->
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->


  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/moment.min.js"></script>
  <script src="../assets/js/jvectormap.min.js"></script>
  <script src="../assets/js/world-merc.js"></script>
  <script src="../assets/js/polyfill.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>