<?php
require "./functions.php";
// require "./../cloudinary/vendor/autoload.php";
// require "../cloudinary/config-cloud.php";

$connect = connect();

session_start();

// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman utama
if (isset($_SESSION['idAdmin'])) {
  header("Location: admin/index.php");
  exit;
} else if (isset($_SESSION['idUser'])) {
  header("Location: ../index.php");
  exit;
}

if (isset($_POST["register"])) {
  // var_dump($_POST); 
  // var_dump($_FILES);
  // die;

  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi berhasil!');
          </script>";
  } else {
    echo
    // "<script>
    //       alert('Registrasi Gagal!');
    //       </script>";
    mysqli_error($connect);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/register.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body style="background-color: #f1f5f9;">
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black login-card">
            <div class="row g-0">

              <div class="header-regist card-top">
                <div class="p-md-5 header-regist2">
                  <img src="../assets/img/LapssPUTIH.svg" alt="" class="img-logo">
                </div>
              </div>

              <div class="">
                <div class="card-body p-md-5 mx-md-4">

                  <form id="registerForm" action="" method="POST" enctype="multipart/form-data">
                    <p class="text-header text-center pt-3">Daftarkan Akun </p>
                    <!-- <div style="font-size: 12px;" class="mt-0 text-center text-header2">dengan mengisi data dibawah ini.</div> -->

                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="password2">Konfirmasi Password</label>
                      <input type="password" id="password2" name="password2" class="form-control" />
                    </div>

                    <div class="divider text-center">
                      <hr class="mb-4 mt-4 d-inline-block mx-auto" style="width: 760px; background-color: #063554; height: 2px" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="foto">Pas Foto</label>
                      <input type="file" class="form-control" id="foto" name="foto">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="nama">Nama Lengkap</label>
                      <input id="nama" class="form-control" name="nama" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="nik">NIK</label>
                      <input id="nik" class="form-control" name="nik" type="number" />
                      <!-- <input id="nik" class="form-control" name="nik" 
                        pattern="^[0-9]*$"
                        data-bv-regexp-message="Only numbers and length 16 digit"/> -->
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="jabatan">Jabatan</label>
                      <input id="jabatan" class="form-control" name="jabatan" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="instansi">Instansi</label>
                      <input id="instansi" class="form-control" name="instansi" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="unit">Unit Kerja</label>
                      <input id="unit" class="form-control" name="unit" />
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label text-login" for="pendidikan">Pendidikan</label>
                      <input id="pendidikan" class="form-control" name="pendidikan" />
                    </div>

                    <div class="text-center pt-1 mb-3 pb-1">
                      <button class="btn btn-login btn-block fa-lg mb-3" type="submit" name="register">Daftar</button>
                      <br>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-3 regist">
                      <p class="mb-0 me-2">Sudah memiliki akun?</p>
                      <a href="./login.php">Masuk</a>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    $(document).ready(function() {
      $('#registerForm').bootstrapValidator();
    });
  </script>
</body>

</html>