<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>Login</title>
</head>

<body class="body-login">
  <div class="login">
    <h3>Login</h3>
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">NIK atau password salah</p>
      <?php endif; ?>
      <div class="input-group">
        <input type="text" name="nik" required>
        <label for="nik">NIK : </label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Password : </label>
      </div>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <div class="input-group btn-login">
        <input type="submit" name="submit" value="Login">
        </input>
      </div>
    </form>
    <div class="regis">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </div>
</body>

</html>