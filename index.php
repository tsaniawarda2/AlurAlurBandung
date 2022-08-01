<?php 
require './pages/functions.php';
session_start();

if(isset($_SESSION['login'])){
  $id = $_SESSION["idUser"];
  $user = query("SELECT * FROM users WHERE users.id_user = '$id' ");
  // return $user;
}
?>

<!-- halaman user -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lapps</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/lineicons.css" />
  <link rel="stylesheet" href="./assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="fixed-top py-3">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="assets/img/LapssPUTIH.svg" alt="" style="height: 30px;" class="img-logo">
      <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>
      <?php if(!isset($_SESSION['login'])){ ?>
      <div class="nav">
          <a href="./pages/login.php" id="loginBtn">Login</a>
      </div>
      <?php } else { ?>
      <header class="header-nav">
            <div class="header-right">
              <!-- profile start -->
              <div class="profile-box ml-15">
                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="profile-info">
                    <div class="info">
                      <h6><?= $user['nama']; ?></h6>
                      <div class="image image-nav">
                        <img src="./assets/img/<?= $user['foto_profile']; ?>" alt="" />
                      </div>
                    </div>
                  </div>
                  <i class="lni lni-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                  <li>
                    <a href="./pages/profile.php">
                      <i class="lni lni-user"></i> View Profile
                    </a>
                  </li>
                  <li>
                    <a href="./index.php">
                      <i class="lni lni-user"></i> Home
                    </a>
                  </li>
                  <li>
                    <a href="./pages/logout.php"> <i class="lni lni-exit"></i> Sign Out </a>
                  </li>
                </ul>
              </div>
              <!-- profile end -->
            </div>
      </header>
      <?php } ?>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="content-jb row">
      <div class="col-6 p-0 image-jb">
        <img src="./assets/img/cuate.png" alt="" height="300px" class="vector-jb">
      </div>
      <div class="col-6 p-0 jb-2">
        <div class="text-jb">
          Let's create your <b>report</b>
        </div>
        <a href="./pages/create.php" class="btn-laporan">Buat Laporan</a>
      </div>
    </div>
  </div>

  <div class="about-lapps text-center">
    <h1 class="text-center">About L-APPS</h1>
    <hr class="mb-4 mt-0 d-inline-block mx-auto" id="preloader" style="width: 180px; background-color: #063554; height: 2px;" />
    <p>L-Apss adalah Aplikasi Laporan berbasis Website yang dibuat untuk laporan pegawai Non ASN. Aplikasi ini juga sebagai data pegawai Non ASN jadi suatu saat jika dibutuhkan data Non ASN tidak perlu memintanya lagi kepada yang bersangkutan, cukup dengan membuka aplikasi dan download data dari aplikasi L-Apss ini.</p>
  </div>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 100) {
        nav.classList.add('change-nav', 'shadow');
      } else {
        nav.classList.remove('change-nav', 'shadow');

      }
    });
  </script>
</body>

</html>