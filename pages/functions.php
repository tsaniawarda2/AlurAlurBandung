<?php

function connect()
{
  // Koneksi ke Database
  $connect = mysqli_connect('localhost', 'root', '', 'alurbandung') or die('FAILED TO CONNECT!!');
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


// Fungsi Admin

function tambahAdmin($data)
{
  $connect = connect();

  $kodeAdmin = htmlspecialchars($data["kode_admin"]);
  $password = htmlspecialchars($data["password"]);
  $id = query("SELECT admin_id FROM admin ORDER BY admin_id DESC")[0]['admin_id'] + 1;


  $query = "INSERT INTO admin VALUES (NULL, 'admin$id', SHA1('$password'))";
  // $query = "INSERT INTO admin VALUES (NULL, 'admin$id', SHA1('$password', '$nik'))";

  mysqli_query($connect, $query) or die(mysqli_error($connect));

  return mysqli_affected_rows($connect);
}

// Password change

function passwordSAdmin($id, $edit)
{
  $connect = connect();
  $password = $edit['password'];
  $confirm = $edit['confirmPassword'];

  if ($password === $confirm) {
    $query = "UPDATE admin SET password = SHA1('$password') WHERE id = $id";

    mysqli_query($connect, $query) or die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
  } else {
    return false;
  }
}

function passwordUser($id, $edit)
{
  $connect = connect();
  $password = $edit['password'];
  $confirm = $edit['confirmPassword'];

  if ($password === $confirm) {
    $query = "UPDATE user SET password = SHA1('$password') WHERE id_user = $id";

    mysqli_query($connect, $query) or die(mysqli_error($connect));

    return mysqli_affected_rows($connect);
  } else {
    return false;
  }
}


// fungsi user 
// function tambah($data) {
//   global $conn;

//   $ijazah = upload();
//   if( !$ijazah ) {
//     return false;
//   }

//   $ktp = upload();
//   if( !$ktp ) {
//     return false;
//   }

//   $bpjsketenagakerjaan = upload();
//   if( !$bpjskesehatan ) {
//     return false;
//   }

//   $bpjskesehatan = upload();
//   if( !$bpjskesehatan ) {
//     return false;
//   }

//   $npwp = upload();
//   if( !$npwp ) {
//     return false;
//   }

//   $kk = upload();
//   if( !$kk ) {
//     return false;
//   }

//   $query = "INSERT INTO alur_bandung
//               VALUES
//             ('', '$ijazah', '$ktp', '$bpjsketenagakerjaan', '$bpjskesehatan', '$npwp', '$kk')
//           ";

//   mysqli_query($conn, $query);

//   return mysql_affected_rows($conn);
// }

// function upload() {

//     $namaFile = $_FILES['file']['name'];
//     $tmpName = $_FILES['ijazah']['tmp_name'];

//     if ($error === 4) {
//       echo "<script>
//               alert('pilih file terlebih dahulu!');
//             </script>";
//       return false;
//     }
// }
