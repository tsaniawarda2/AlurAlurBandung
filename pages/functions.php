<?php

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
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

//registrasi
function registrasi($data){
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

  // upload foto
  $foto = upload();
  if ( !$foto ){
    return false;
  }

  //cek email sudah ada atau belum
  $result = mysqli_query($connect, "SELECT email FROM users WHERE email = '$email'");

  if(mysqli_fetch_assoc($result)) {
      echo "<script>
              alert('email sudah terdaftar!')
              </script>";
      return false;
  }

  //cek konfirmasi password
  if ( $password !== $password2 ){
      echo "<script>
          alert('konfirmasi password tidak sesuai!');
          </script>";
      return false;
  }

  //enskripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //tambah userbaru ke database
  mysqli_query($connect, "INSERT INTO users VALUES('', '$foto', '$nama', '$nik', '$jabatan', '$instansi', '$unit', '$pendidikan', '', '', '', '', '', '$email', '$password')");

  return mysqli_affected_rows($connect);
}

function  upload(){
  $namaFile = $_FILES['foto']['name'];
  $ukuranFile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmpName = $_FILES['foto']['tmp_name'];

  // //cek apakah tidak ada gambar yang diupload
  if($error === 4){
      echo "<script>
          alert('pilih foto terlebih dahulu');
          </script>";
      return false;
  }

  //cek yg diupload gambar atau bukan
  $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
  $ekstensiFoto = explode(".", $namaFile);
  $ekstensiFoto = strtolower(end($ekstensiFoto));

  if(!in_array( $ekstensiFoto, $ekstensiFotoValid)){
      echo "<script>
          alert('foto yang anda upload bukan gambar');
      </script>";
      return false;
  }

  //cek jika ukuran terlalu besar
  if( $ukuranFile > 2000000) {
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

  return $namaFileBaru;
}