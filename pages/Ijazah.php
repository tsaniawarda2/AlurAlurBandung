<?php
    // require 'functions.php';

    // $users = query("SELECT * FROM users");

    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "alur_bandung");

    // ambil data dari tabel user
    $result = mysqli_query($conn, "SELECT * FROM users");
    
    // ambil data (fetch) dari objek result (assoc: mengembalikan array associative)
    $users = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="../css/ijazah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Dokumen Ijazah</title>
</head>
<body>
    <div class="body-table">
    <table class="table table-bordered" style="text-align: center">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Dokumen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $users as $row) :  ?>
        <tr>
            <th scope="row"><?= $users["nama"]; ?></th>
            <td class="td"><a class="btn btn-danger button-lihat" href="" role="button">Download</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    </div>
    <a href="../pages/datadokumen.php" class="btn btn-kembali" type="button" style="border-radius: 17px; width: 110px; margin-left: 10px; margin-bottom: 20px; background-color: #063554; color: white; font-size: 17px; text-transform: uppercase">Kembali</a>
</body>
</html>