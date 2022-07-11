<?php
// session_start();

// if (!isset($_SESSION["username"])) {
//   header("Location: login.php");
//   exit;
// }

// require 'functions.php';

// if (isset($_POST['tambah'])) {
//   if (tambah($_POST) > 0) {
//     echo "<script>
//               alert('Data Berhasil Ditambahkan!');
//               document.location.href = 'admin.php';
//           </script>";
//   } else {
//     echo "<script>
//               alert('Data Gagal Ditambahkan!');
//               document.location.href = 'admin.php';
//           </script>";
//   }
// }
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="../css/tambah.css">

  <!-- MY FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cambay:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Leviosa Store</title>
  <link rel="icon" href="../assets/img/icon.png" class="responsive-img">
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="row">
        <!-- Gambar -->
        <div class="col m5 s12">
          <div class="card-panel foto">
            <p>Gambar :</p>
            <div class="input-field center">
              <img src="../assets/img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
              <input type="file" name="Gambar" class="gambar" onchange="previewImage()">
              <label for="gambar"></label>
            </div>
            <!-- Tombol -->
            <div class="tombol center">
              <div class="container">
                <button class="btn waves-effect waves-light" type="submit" name="tambah">Tambah</button>
                <button class="btn waves-effect waves-light" type="submit">
                  <a href="admin.php" style="color: white;">Kembali</a>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col m1 s12"></div>
        <!-- Inputan -->
        <div class="col m6 s12">
          <div class="card-panel inputan">
            <p>Judul :</p>
            <div class="input-field">
              <input type="text" name="Judul" id="judul" required autocomplete="off">
              <label for="judul"></label>
            </div>
            <p>Penulis :</p>
            <div class="input-field">
              <input type="text" name="Penulis" id="penulis" required autocomplete="off">
              <label for="penulis"></label>
            </div>
            <p>Sinopsis :</p>
            <div class="input-field">
              <input type="text" name="Sinopsis" id="sinopsis" required autocomplete="off">
              <label for="sinopsis"></label>
            </div>
            <p>Tahun Terbit :</p>
            <div class="input-field">
              <input type="text" name="TahunTerbit" id="tahun_terbit" required autocomplete="off">
              <label for="tahun_terbit"></label>
            </div>
            <p>Harga :</p>
            <div class="input-field">
              <input type="text" name="Harga" id="harga" required autocomplete="off">
              <label for="harga"></label>
            </div>
          </div>
        </div>
      </div>


    </form>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>