<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Icon -->
  <link rel="icon" href="../assets/img/LApssGradasi.svg" class="responsive-img" />

  <!-- MY CSS -->
  <link rel="stylesheet" href="../../../css/laporan.css" />

  <title>LApps</title>
</head>

<body>
  <section id="content">
    <div class="row rounded-3" id="contentS">
      <!-- Profile -->
      <div class="col-md-5 profile">
        <h1>Laporan</h1>
        <div class="dataSystem">
          <p class="nama">Nama</p>
          <p class="jabatan">Jabatan</p>
          <p class="unitKer">Unit Kerja</p>
        </div>
      </div>

      <!-- Data -->
      <div class="col-md-7 data">
        <!-- Tanggal -->
        <div class="row d-flex align-items-center" id="formInput">
          <div class="col-5">
            <p>Input Tanggal dan Tahun</p>
          </div>
          <div class="col-7">
            <div class="input-group">
              <input type="date" class="form-control" name="date" required />
            </div>
          </div>
        </div>

        <!-- Lama -->
        <div class="row d-flex align-items-center" id="formInput">
          <div class="col-5">
            <p>Lama Kerjaan</p>
          </div>
          <div class="col-7">
            <div class="input-group">
              <input type="time" class="form-control" name="waktuAwal" id="waktu1" />
              <input type="time" class="form-control" name="waktuAkhir" id="waktu2" />
            </div>
          </div>
        </div>

        <!-- Keterangan -->
        <div class="row d-flex align-items-center" id="formInput">
          <div class="col-5">
            <p>Keterangan</p>
          </div>
          <div class="col-7">
            <div class="input-group">
              <select class="form-select" id="inputGroupSelect01">
                <option id="opt" selected>Pilih Keterangan...</option>
                <option id="opt" value="1">Masuk</option>
                <option id="opt" value="2">Izin</option>
                <option id="opt" value="3">Dinas Luar</option>
                <option id="opt" value="4">Sakit</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Uraian -->
        <div class="row d-flex align-items-center" id="formInput">
          <div class="col-5">
            <p>Uraian</p>
          </div>
          <div class="col-7">
            <div class="input-group">
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="text-center btnSubmit">
          <button type="button" class="btn btn-primary" id="btnSubmit">
            Submit
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- <div class="container">
      <div class="row rounded-3 laporan-card">
       
      </div>
    </div> -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>