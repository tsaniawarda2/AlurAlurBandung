<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css?family=Shrikhand|Lobster|Libre+Baskerville|Kaushan+Script&display=swap" rel="stylesheet">

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Login</title>
</head>

<body class="body-login">
  <div class="login">
    <h3>Login</h3>
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p style="color:red; font-style: italic;">Username atau password salah</p>
      <?php endif; ?>
      <div class="input-group">
        <input type="text" name="username" required>
        <label for="username">Username : </label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label for="password">Password : </label>
      </div>
      <div class="remember">
        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
      </div>
      <div class="input-group">
        <input type="submit" name="submit" value="login">
      </div>
    </form>
    <div class="regis">
      <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </div>
</body>

</html>