<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../css/register.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- my fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body style="background-color: #eee;">
  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black login-card">
            <div class="row g-0">

              <div class="d-flex align-items-center gradient-custom-2 header-regist">
                <div class="text-white p-md-5 mx-md-4 header-regist2">
                  <img src="../assets/img/LapssPUTIH.svg" alt="" class="img-logo">
                </div>
              </div>

              <div class="">
                <div class="card-body p-md-5 mx-md-4">

                  <form>
                    <p class="text-header text-center pt-3">Daftarkan Akun </p>
                      <!-- <div style="font-size: 12px;" class="mt-0 text-center text-header2">dengan mengisi data dibawah ini.</div> -->
  
                    <div class="form-outline mb-2 mt-4 py-1">
                      <label class="form-label text-login" for="form2Example11">Foto</label>
                      <input type="file" class="form-control" id="inputGroupFile01">
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">Nama</label>
                      <input id="form2Example11" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">NIK</label>
                      <input id="form2Example11" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">Jabatan</label>
                      <input id="form2Example11" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">Instansi</label>
                      <input id="form2Example11" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">Unit Kerja</label>
                      <input id="form2Example11" class="form-control" />
                    </div>

                    <div class="form-outline mb-2 py-1">
                      <label class="form-label text-login" for="form2Example11">Pendidikan</label>
                      <input id="form2Example11" class="form-control" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label text-login" for="form2Example22">Password</label>
                      <input type="password" id="form2Example22" class="form-control" />
                    </div>
  
                    <div class="text-center pt-1 mb-3 pb-1">
                      <button class="btn btn-login btn-block fa-lg mb-3" type="button">Daftar</button>
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
</body>
</html>