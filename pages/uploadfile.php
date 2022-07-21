<?php
  //  require 'functions.php';

   // pengecekan tipe harus pdf
  //  $tipe_file = $_FILES['file']['type'];
  //  if ($tipe_file == "application/pdf") 
  //   {
  //     $ijazah = trims($_FILES['file']['name']);

  //     $sql = "INSERT INTO users (ijazah) VALUES ($ijazah)";
  //     mysqli_query($conn,$sql);
      

  //   // dapatkan id terakhir
  //   $query = mysqli_query($conn, "SELECT user_id FROM users ORDER BY user_id");
  //   $data = mysqli_fetch_array($query);

  //   $folder = "files";

  //   //fungsi upload pdf
  //   move_uploaded_file($file_temp);

  //   $pesan = "Upload pdf berhasil";
  // } else {
  //   $pesan = "Upload Gagal, file bukan pdf";
  // }
  
  //  if (isset($_POST['simpan'])) {

  //     $direktori = "files/";
  //     $fileName = $_FILES['file']['name'];
  //     move_uploaded_file($_FILES['file']['tmp_name'], $direktori.$fileName);

  //     mysqli_query($koneksi, "insert into dokumen set file='$file_name'");

  //     echo "<b>File berhasil diupload";


      //   var_dump($_POST); die;

      //  if (tambah($_POST) > 0) {
      //      echo "<script>
      //                   alert('Data Berhasil ditambahkan!');
      //                   document.location.href = 'admin.php';
      //      </script>";
      //  } else {
      //      echo "<script>
      //                   alert('Data Gagal ditambahkan!');
      //                   document.location.href = 'admin.php';
      //      </script>";
      //  }
?>
<script>
      alert('<?php echo $pesan;?>'); location='uploadfile.php';
</script>

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
  <link rel="stylesheet" type="text/css" href="../assets/css/uploadfile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lengkapi Profile</title>
</head>

<body style="background-color: #063554">


  <div class="rounded-3 text-black">
              <div class="card">
                <div class="card-body p-md-5 mx-md-4">

                  <form class="form-profile" action="" methode="post" enctype="multipart/form-data">
                    <p class="text-header text-center pt-3">Lengkapi Profile</p>
  
                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-simpan" for="form2Example11">Ijazah</label>
                      <input type="file" name="ijazah" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-simpan" for="form2Example11">KTP</label>
                      <input type="file" name="ktp" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-simpan" for="form2Example11">BPJS KETENAGAKERJAAN</label>
                      <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-simpan" for="form2Example11">BPJS KESEHATAN</label>
                      <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-simpan" for="form2Example11">NPWP</label>
                      <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-simpan" for="form2Example11">KARTU KELUARGA</label>
                      <input type="file" name="file" class="form-control" id="inputGroupFile01">
                    </div>
  
                    <div class="text-center pt-1 mb-3 pb-1">
                      <button class="btn btn-simpan" name="simpan" type="simpan" style="background-color: #063554; color: white; border-radius: 17px; width: 100px; margin-top: 40px; text-transform: uppercase">Simpan</button>
                        <br>
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>
                  </form>
  
                </div>
              </div>
            </div>
  </div>
</body>

</html>