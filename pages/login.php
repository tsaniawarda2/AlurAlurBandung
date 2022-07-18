<?php
session_start();
require 'functions.php';
// melakukan pengechekan apakah user sudah melakukan login jika sudah redirect ke halaman utama
if (isset($_SESSION['nik'])) {
  header("Location : admin.php");
  exit;
}
// Login
if (isset($_POST['submit'])) {
  $username = $_POST['nik'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM users WHERE nik = '$nik' ");
  // mencocokan NIK dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['nik'] = $_POST['nik'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background-color: #063554;">
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black login-card">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <form>
                    <p class="text-header text-center pt-3">Selamat datang kembali</p>
  
                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="form2Example11">NIK</label>
                      <input id="form2Example11" class="form-control" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label text-login" for="form2Example22">Password</label>
                      <input type="password" id="form2Example22" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-3 pb-1">
                      <button class="btn btn-login btn-block fa-lg mb-3" type="button">Login</button>
                        <br>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-3 regist">
                      <p class="mb-0 me-2">Belum memiliki akun?</p>
                      <a href="./register.php">Daftar</a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2 ">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4 text-center gradient-card" >
                  <img src="../assets/img/LapssPUTIH.svg" alt="" class="img-logo">
                  <!-- <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>