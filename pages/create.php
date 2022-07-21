<?php
require 'functions.php';
// Ambil data di URL
// $id = $_GET['id'];
$id = 2;
$lpr_user = query("SELECT * FROM users WHERE users.id_user = $id ");
// var_dump($lpr_user);
if (isset($_POST["create"])) {
  if (createLaporan($id, $_POST) > 0) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = '../index.html';
      </script>
    ";
  } else {
    echo " 
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = '../index.html';
      </script>";
  }
}

// mysqli_query()
// if (isset($_POST["submit"])) {
//   if (update($_POST) > 0) {
//     echo "
//       <script>
//         alert('data berhasil diubah');
//         document.location.href = 'index.php';
//       </script>
//     ";
//   } else {
//     echo "
//     <script>
//       alert('data gagal diubah');
//       document.location.href = 'daftar.php';
//     </script>
//     ";
//   }
// }
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

  <!-- ========== section start ========== -->
  <section class="section">
    <div class="container container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="titlemb-30 mb-4">
              <h2>Buat Laporan</h2>
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
                <div class="profile-image">
                  <img src="../assets/img/profile/profile-1.png" alt="" />
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
                      <input type="date" name="tanggal_tahun" id="tanggal_tahun" required>
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
                          main-btn
                          info-btn-outline
                          rounded-full
                          btn-hover" type="submit" name="create">Tambah</button>
                        <button class="main-btn
                          danger-btn-outline
                          rounded-full
                          btn-hover" type="reset">
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

      <a href="../index.html" class="main-btn success-btn-outline rounded-full btn-hover">Kembali
      </a>
    </div>
    <!-- end container -->
  </section>
  <!-- ========== section end ========== -->

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
  <!-- </main> -->
  <!-- ======== main-wrapper end =========== -->

  <!-- ========= All Javascript files linkup ======== -->


  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Chart.min.js"></script>
  <script src="../assets/js/dynamic-pie-chart.js"></script>
  <script src="../assets/js/moment.min.js"></script>
  <script src="../assets/js/fullcalendar.js"></script>
  <script src="../assets/js/jvectormap.min.js"></script>
  <script src="../assets/js/world-merc.js"></script>
  <script src="../assets/js/polyfill.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>