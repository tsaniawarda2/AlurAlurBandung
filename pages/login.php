<?php
session_start();
require 'functions.php';
// melakukan pengechekan apakah user sudah melakukan login jika sudah redirect ke halaman utama
// if (isset($_SESSION['email'])) {
//   header("Location: ../pages/admin/index.html");
//   // exit;
// }

// Login
if (isset($_POST['login'])) {
  $connect = connect();
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $emailAdmin = mysqli_query(connect(), "SELECT * FROM admin WHERE email = '$email'");
  $resultAdmin = mysqli_query(connect(), "SELECT * FROM admin WHERE email = '$email'");
  $resultUser = mysqli_query(connect(), "SELECT * FROM users WHERE email = '$email'");

  if (mysqli_num_rows($resultAdmin) === 1){
    $dataAdmin = mysqli_fetch_array($resultAdmin);
    $pwAdmin = $dataAdmin['password'];
    if($password == $pwAdmin){
      $_SESSION['admin'] = $_POST['email'];
  
      echo "<script>
      alert('login berhasil!');
      </script>";
      header("Location: admin/index.php");
    // exit;
    } else {
      echo "<script>
      alert('Password salah!');
      </script>";
      return false;
    } 
  }
  // } else {
  //   echo "<script>
  //   alert('Email belum terdaftar!');
  //   </script>";
  //   return false;
  // }
    
  else if (mysqli_num_rows($resultUser) === 1){
    $dataUser = mysqli_fetch_array($resultUser);
    $pwUser = $dataUser['password'];

    $_SESSION['user'] = $_POST['email'];
    $verify = password_verify($password, $pwUser);
    if($verify){
      header("Location: ../index.php");
      // exit;
    } else {
      echo "<script>
      alert('Password salah!');
      </script>";
      return false;
      // header("Refresh:0");
      // header("Location: .");
    }
  } else {
    echo "<script>
    alert('Email belum terdaftar!');
    </script>";
    return false;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/login.css">
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
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <form method="POST" class="form-login">
                    <p class="text-header text-center pt-3"> </p>
  
                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="password">Password</label>
                      <input type="password" id="password" name="password" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-3 pb-1">
                      <button class="btn btn-login btn-block fa-lg mb-3" type="submit" name="login">Login</button>
                        <br>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>  
                  </form>
  
                </div>
              </div>

              <div class="col-lg-6 card-left">
                <div class="text-left text-white">
                  <h3> Sign In </h3>
                  <p>Welcome Back!</p>
                </div>
                <img src="../assets/img/L-ApssPUTIH.png" alt="" class="img-logo-1">
                <img src="../assets/img/L-ApssABUMONYET.png" alt="" class="img-logo-2">
                <div class="d-flex align-items-center justify-content-center pb-3 regist text-white">
                  <p class="mb-0 me-2">Belum memiliki akun?</p>
                  <a href="./register.php">Daftar</a>
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