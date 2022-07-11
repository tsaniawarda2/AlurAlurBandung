<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!-- my Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Condiment&family=Lateef&family=Lovers+Quarrel&family=Rock+Salt&family=Sacramento&display=swap" rel="stylesheet">


       <!-- my CSS -->
       <link rel="stylesheet" type="text/css" href="../css/style.css">
       <link rel="stylesheet" type="text/css" href="../css/admin.css">
       <link rel="stylesheet" type="text/css" href="../css/detail.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Profile</title>
</head>
<body>
    <div class="container">
    <div class="card-panel">
       <div class="gambar">
       <p>Foto Profil</p>
        <img src="../assets/img/<?= $alat["foto"]; ?>" width="500" alt="">
       </div>
       
       <div class="keterangan" style="font-family: Lateef; font-size: 25px;">
       <table class="table table-striped">
        <p>Nama :  </p>
        <p>NIK :  </p>
        <p>Jabatan :  </p>
        <p>Instansi :  </p>
        <p>Unit Kerja :  </p>
        <p>Pendidikan :  </p>
       </table>
        
       </div>

       <a href="../index.php" class="waves-effect green darken-4 btn" style="border-radius: 17px;">Kembali</a>
    </div>
    </div>
</body>
</html>