<?php

// require "../cloudinary/vendor/autoload.php";
// require "../cloudinary/config-cloud.php";

function connect()
{
  // Koneksi ke Database
  $connect = mysqli_connect('localhost', 'root', '', 'alur_bandung') or die('FAILED TO CONNECT!!');
  return $connect;
}

function query($sql)
{
  $connect = connect();

  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

  // untuk 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Registrasi
function registrasi($data)
{
  $connect = connect();

  // var_dump($data); die;

  $email = $data["email"];
  $password = mysqli_real_escape_string($connect, $data["password"]);
  $password2 = mysqli_real_escape_string($connect, $data["password2"]);
  $nama = $data["nama"];
  $nik = $data["nik"];
  $jabatan = $data["jabatan"];
  $instansi = $data["instansi"];
  $unit = $data["unit"];
  $pendidikan = $data["pendidikan"];
  $type = 'user';

  // upload foto
  $foto = uploadFoto();
  if (!$foto) {
    return false;
  }

  //cek nik sudah ada atau belum
  $result = mysqli_query($connect, "SELECT nik FROM users WHERE nik = '$nik'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
              alert('Akun sudah terdaftar!')
              </script>";
    return false;
  }

  //cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
          alert('Konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  //enskripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah userbaru ke database
  mysqli_query($connect, "INSERT INTO users VALUES('', '$foto', '$nama', '$nik', '$jabatan', '$instansi', '$unit', '$pendidikan', '', '', '', '', '', '', '$email', '$password', $type)");

  return mysqli_affected_rows($connect);
}

function  uploadFoto()
{
  $namaFile = $_FILES['foto']['name'];
  $ukuranFile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmpName = $_FILES['foto']['tmp_name'];

  // //cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
          alert('pilih foto terlebih dahulu');
          </script>";
    return false;
  }

  //cek yg diupload gambar atau bukan
  $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
  $ekstensiFoto = explode(".", $namaFile);
  $ekstensiFoto = strtolower(end($ekstensiFoto));

  if (!in_array($ekstensiFoto, $ekstensiFotoValid)) {
    echo "<script>
          alert('foto yang anda upload bukan gambar');
      </script>";
    return false;
  }

  //cek jika ukuran terlalu besar
  if ($ukuranFile > 2000000) {
    echo "<script>
          alert('ukuran gambar terlalu besar');
      </script>";
    return false;
  }

  // upload file
  //generate nama foto baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiFoto;

  move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

  // \Cloudinary\Uploader::upload($file_tmp, array("pulic_id" => $namaFileBaru));

  return $namaFileBaru;
}

// CRUD Laporan
function createLaporan($id, $data)
{

  $connect = connect();

  $tanggal_tahun = htmlspecialchars($data['tanggal_tahun']);
  $waktu_mulai = htmlspecialchars($data['waktu_mulai']);
  $waktu_selesai = htmlspecialchars($data['waktu_selesai']);
  $keterangan = htmlspecialchars($data['keterangan']);
  $uraian_kegiatan = htmlspecialchars($data['uraian_kegiatan']);
  $id_user = $id;

  $query = "INSERT INTO 
              laporan 
            VALUES 
              (NULL, '$tanggal_tahun', '$waktu_mulai', '$waktu_selesai', '$keterangan', '$uraian_kegiatan', '$id_user')";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}

function deleteLaporan($id)
{
  $connect = connect();

  mysqli_query($connect, "DELETE FROM laporan WHERE laporan.laporan_id = $id");

  return mysqli_affected_rows($connect);
}

function updateLaporan($id, $data)
{
  $connect = connect();
  $tanggal_tahun = htmlspecialchars($data['tanggal_tahun']);
  $waktu_mulai = htmlspecialchars($data['waktu_mulai']);
  $waktu_selesai = htmlspecialchars($data['waktu_selesai']);
  $keterangan = htmlspecialchars($data['keterangan']);
  $uraian_kegiatan = htmlspecialchars($data['uraian_kegiatan']);
  $laporan_id = $id;

  $query = "UPDATE laporan 
              SET
              tanggal_tahun = '$tanggal_tahun',
              waktu_mulai = '$waktu_mulai',
              waktu_selesai = '$waktu_selesai',
              keterangan = '$keterangan',
              uraian_kegiatan = '$uraian_kegiatan'
            WHERE laporan.laporan_id = '$laporan_id'
            ";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}

// CRUD Data User
function deleteUser($id)
{
  $connect = connect();

  // Menghapus foto di folder img 
  $lpr_user = query("SELECT * FROM users WHERE users.id_user = '$id'");
  if ($lpr_user['foto_profile'] != 'no-photo.png') {
    unlink('../../../assets/img/' . $lpr_user['foto_profile']);
  };

  mysqli_query($connect, "DELETE FROM users WHERE users.id_user = $id");

  return mysqli_affected_rows($connect);
}


function updateUser($id, $data)
{
  $connect = connect();

  $foto_lama = htmlspecialchars($data['foto_lama']);
  $nama = htmlspecialchars($data['nama']);
  $nik = htmlspecialchars($data['nik']);
  $email = htmlspecialchars($data['email']);
  $jabatan = htmlspecialchars($data['jabatan']);
  $instansi = htmlspecialchars($data['instansi']);
  $unit_kerja = htmlspecialchars($data['unit_kerja']);
  $pendidikan = htmlspecialchars($data['pendidikan']);
  $id_user = $id;

  $foto_profile = uploadFP();
  if (!$foto_profile) {
    return false;
  }

  // Kalau user tidak mengganti foto akan diisi dengan gambar lama
  if ($foto_profile == '../../assets/img/no-photo.png') {
    $foto_profile = $foto_lama;
  }

  $query = "UPDATE users SET 
              foto_profile = '$foto_profile',
              nama = '$nama',
              nik = '$nik',
              email = '$email',
              jabatan = '$jabatan',
              instansi = '$instansi',
              unit_kerja = '$unit_kerja',
              pendidikan = '$pendidikan'
            WHERE users.id_user = $id_user";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}

function uploadFP()
{
  $nama_file = $_FILES['foto_profile']['name'];
  $tipe_file = $_FILES['foto_profile']['type'];
  $ukuran_file = $_FILES['foto_profile']['size'];
  $tmp_file = $_FILES['foto_profile']['tmp_name'];
  $error_file = $_FILES['foto_profile']['error'];

  // Cek apakah tidak ada gambar yang diupload
  if ($error_file == 4) {
    // echo "
    //   <script>
    //     alert('Pilih foto terlebih dahulu!');
    //   </script>
    // ";
    return '../../assets/img/no-photo.png';
  }

  // Cek yang diupload gambar atau bukan
  $ekstensiValid = ['jpg', 'jpeg', 'png'];

  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));

  if (!in_array($ekstensi_file, $ekstensiValid)) {
    echo "
      <script>
        alert('Yang anda pilih bukan foto!');
      </script>
    ";
    return false;
  }

  // Cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "
      <script>
        alert('Yang anda pilih bukan foto!');
      </script>
    ";
    return false;
  }

  // Cek ukuran File
  if ($ukuran_file > 5000000) { // 5Mb
    echo "
      <script>
        alert('Ukuran foto terlalu besar!');
      </script>
    ";
    return false;
  }

  // LOLOS Seleksi
  // Generate nama file 
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;

  // move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);
  move_uploaded_file($tmp_file, '../../../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}


// Format Tanggal
function hariIndo($hariInggris)
{
  switch ($hariInggris) {
    case 'January':
      return 'Januari';
    case 'February':
      return 'Februari';
    case 'March':
      return 'Maret';
    case 'April':
      return 'April';
    case 'May':
      return 'Mei';
    case 'June':
      return 'Juni';
    case 'July':
      return 'Juli';
    case 'August':
      return 'Agustus';
    case 'September':
      return 'September';
    case 'Oktober':
      return 'October';
    case 'November':
      return 'November';
    case 'December':
      return 'Desember';
    default:
      return 'Hari tidak valid';
  }
}

function tambah($data)
{
  $connect = connect();

  $ijazah = upload();
  if (!$ijazah) {
    return false;
  }

  $ktp = upload();
  if (!$ktp) {
    return false;
  }

  $bpjsketenagakerjaan = upload();
  if (!$bpjsketenagakerjaan) {
    return false;
  }

  $bpjskesehatan = upload();
  if (!$bpjskesehatan) {
    return false;
  }

  $npwp = upload();
  if (!$npwp) {
    return false;
  }

  $kk = upload();
  if (!$kk) {
    return false;
  }

  $query = "INSERT INTO alur_bandung
              VALUES
            ('', '$ijazah', '$ktp', '$bpjsketenagakerjaan', '$bpjskesehatan', '$npwp', '$kk')
          ";

  mysqli_query($connect, $query);

  return mysqli_affected_rows($connect);
}

function upload()
{

  $namaFile = $_FILES['ijazah']['name'];
  $ukuranFile = $_FILES['ijazah']['size'];
  $error = $_FILES['ijazah']['error'];
  $tmpName = $_FILES['ijazah']['tmp_name'];

  if ($error === 4) {
    echo "<script>
              alert('pilih file terlebih dahulu!');
            </script>";
    return false;
  }
}

function tambahAdmin($data)
{
  $connect = connect();

  $email = $data["email"];
  $password = mysqli_real_escape_string($connect, $data["password"]);
  $password2 = mysqli_real_escape_string($connect, $data["password2"]);

  //cek email sudah ada atau belum
  $result = mysqli_query($connect, "SELECT email FROM admin WHERE email = '$email'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
              alert('email sudah terdaftar!')
              </script>";
    return false;
  }

  //cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  //enskripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah userbaru ke database
  mysqli_query($connect, "INSERT INTO admin VALUES('', '$email', '$password')");

  return mysqli_affected_rows($connect);
}
