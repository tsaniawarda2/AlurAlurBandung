<?php
require "../functions.php";

$connect = connect();

session_start();
// if (isset($_SESSION['idUser'])) {
//   header("Location: ../index.php");
//   exit;
// }

if (isset($_POST["admin"])) {

  if (tambahAdmin($_POST) > 0) {
    echo "<script>
          alert('Tambah Admin berhasil!');
          </script>";
  } else {
    echo mysqli_error($connect);
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
  <link rel="stylesheet" href="../../assets/css/register.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body style="background-color: #f1f5f9;">
  <section class="h-100 gradient-form">
    <div class="container py-4 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black login-card">
            <div class="row g-0">

              <div class="header-regist card-top">
                <div class="p-md-4 header-regist2">
                  <img src="../../assets/img/LapssPUTIH.svg" alt="" class="img-logo">
                </div>
              </div>

              <div class="">
                <div class="card-body p-md-5 mx-md-4">

                  <form id="registerForm" action="" method="POST" enctype="multipart/form-data">
                    <p class="text-header text-center pt-1">Tambahkan Admin</p>
                    <!-- <div style="font-size: 12px;" class="mt-0 text-center text-header2">dengan mengisi data dibawah ini.</div> -->
                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="email">NIK</label>
                      <input type="number" class="form-control" id="nik" name="nik">
                    </div>

                    <!-- <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="nik">NIK</label>
                      <input type="number" class="form-control" id="nik" name="nik">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />
                    </div>

                    <div class="form-outline mb-3 py-1">
                      <label class="form-label text-login" for="password2">Konfirmasi Password</label>
                      <input type="password" id="password2" name="password2" class="form-control" />
                    </div> -->

                    <div class="text-center pt-1 ">
                      <button class="btn btn-login btn-block fa-lg mb-1" type="submit" name="admin">Tambah</button>
                      <br>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
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
</body>

</html>