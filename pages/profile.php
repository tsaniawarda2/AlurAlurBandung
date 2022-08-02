<?php
session_start();

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "alur_bandung");

// ambil data dari tabel user
$id = $_SESSION["idUser"];
$result = mysqli_query($conn, "SELECT * FROM users WHERE users.id_user = '$id' ");

// ambil data (fetch) dari objek result (assoc: mengembalikan array associative)
$users = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/profile.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../assets/css/main.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/laporan.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
</head>

<body style="background-color: #fff;">
  <!-- Navbar -->
  <nav class="fixed-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="../assets/img/LapssPUTIH.svg" alt="" style="height: 30px;" class="img-logo">
      <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
      <div class="nav">
        <!-- profile start -->
        <div class="profile-box ml-15">
          <!-- ========== header start ========== -->
          <header class="header-nav">
            <div class="header-right">
              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <h6><?= $users['nama']; ?></h6>
                      <div class="image image-nav">
                        <img src="../assets/img/<?= $users['foto_profile']; ?>" alt="" />
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="./profile.php">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="../index.php">
                      <i class="lni lni-home"></i> Home
                    </a>
                  </li>
                  <li>
                    <a href="./logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
          </header>
        </div>
      </div>
    </div>
  </nav>

  <!-- profile -->
  <div class="card-panel card-profil">
    <div class="card-center">
      <div class="card border-info mb-5 card-profile" style="border-radius: 0.3em; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px; background-color: #063554">
        <h2 class="profile text-center" style="color: #fff">PROFILE</h2>

        <div class="row g-0">
          <div class="col-md-5">
            <div class="profile-info">
              <div class="profile-image text-center" style="margin-left: 250px; padding-bottom: 20px">
                  <?php 
                  if($users['foto_profile'] === "") {
                    ?>
                  <img src="../assets/img/no-photo.png" style="margin-bottom: 20px; padding-left: 200px; width: 255px!important; height: 330px!important;">
                  <?php } else {; ?>
                    <img src="../assets/img/<?= $users['foto_profile']; ?>" style="width: 255px!important; height: 330px!important">
                    <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-8 form-profile" style="color: #fff;">
            <form class="row g-3">
              <div class="col-12 form" >
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" disabled value="<?= $users["nama"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="nik" class="form-label">NIK</label>
                <input type="nik" class="form-control" disabled value="<?= $users["nik"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" disabled value="<?= $users["email"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="jabatan" class="form-control" disabled value="<?= $users["jabatan"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="instansi" class="form-label">Instansi</label>
                <input type="instansi" class="form-control" disabled value="<?= $users["instansi"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="unitkerja" class="form-label">Unit Kerja</label>
                <input type="unitkerja" class="form-control" disabled value="<?= $users["unit_kerja"]; ?>" style="background-color: #fffff0">

              </div>
              <div class="col-12 form">
                <label for="pendidikan" class="form-label">Pendidikan</label>
                <input type="pendidikan" class="form-control" disabled value="<?= $users["pendidikan"]; ?>" style="background-color: #fffff0">

              </div>
            </form>
          </div>
        </div>
        <a href="../index.php" class="btn-kembali" type="button">Kembali</a>

      </div>
    </div>


  </div>

  <!-- footer -->
  <footer class="footer text-center text-lg-start text-white" style="background-color: #063554">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between" style="background-color: white;"></section>

    <!-- Section: Links  -->
    <section class="d-flex justify-content-between">
      <div class="container footer-content text-center text-md-start mt-4">
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 footer-1">
            <!-- Content -->
            <!-- <h6 class="text-uppercase fw-bold">About Lapps</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px;"/> -->
            <div class="footer-logo mb-2">
              <img src="../assets/img/LapssPUTIH.svg" alt="" height="30px">
            </div>
            <hr class="mb-3 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #fff; height: 2px" />
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
            <h6 class="text-uppercase fw-bold text-white">Social Network</h6>
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
            <h6 class="text-uppercase fw-bold text-white">Explore</h6>
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

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/moment.min.js"></script>
  <script src="../assets/js/jvectormap.min.js"></script>
  <script src="../assets/js/world-merc.js"></script>
  <script src="../assets/js/polyfill.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>