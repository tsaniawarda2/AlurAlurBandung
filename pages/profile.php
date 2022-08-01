<?php
    session_start();
    
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "alur_bandung");

    // ambil data dari tabel user
    $id = $_SESSION["idUser"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE users.id_user = '$id' ");
    
    // ambil data (fetch) dari objek result (assoc: mengembalikan array associative)
    $users = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- my fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <!-- my CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/css/profile.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Profile</title>
</head>

<body style="background-color: #063554;">
    <div class="card-panel">
        <div class="card-center">
        <div class="card border-info mb-5 card-profile" style="border-radius: 0.3em; box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
        <h2 class="profile text-center">PROFILE</h2>

        <div class="row g-0">
            <div class="col-md-5">
            <img src="../assets/img/<?php echo $users["foto_profile"]; ?>" class="img-fluid rounded-start img-profile" alt="..." style="border-radius: 3px">
            </div>
                <div class="col-md-8 form-profile">
                    <form class="row g-3">
                        <div class="col-12 form">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" class="form-control" disabled value="<?= $users["nama"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                        <div class="col-12 form">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="nik" class="form-control" disabled value="<?= $users["nik"]; ?>"style="background-color: #fffff0"> 
                            
                        </div>
                        <div class="col-12 form">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" disabled value="<?= $users["email"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                        <div class="col-12 form">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="jabatan" class="form-control" disabled value="<?= $users["jabatan"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                        <div class="col-12 form">
                            <label for="instansi" class="form-label">Instansi</label>
                            <input type="instansi" class="form-control" disabled value="<?= $users["instansi"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                        <div class="col-12 form">
                            <label for="unitkerja" class="form-label">Unit Kerja</label>
                            <input type="unitkerja" class="form-control" disabled value="<?= $users["unit_kerja"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                        <div class="col-12 form">
                            <label for="pendidikan" class="form-label">Pendidikan</label>
                            <input type="pendidikan" class="form-control" disabled value="<?= $users["pendidikan"]; ?>" style="background-color: #fffff0">
                            
                        </div>
                    </form>
                </div>
            </div>
            <a href="../index.php" class="btn-kembali" type="button">Kembali</a>

            </div> 
        </div>
       
        
    </div>

</body>
</html>
