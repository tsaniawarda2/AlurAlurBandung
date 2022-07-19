<?php

function connect()
{
  // Koneksi ke Database
  $connect = mysqli_connect('localhost', 'root', '', 'aluralurbandung') or die('FAILED TO CONNECT!!');
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

function delete($id)
{
  $connect = connect();

  mysqli_query($connect, "DELETE FROM laporan WHERE laporan.laporan_id = $id");

  return mysqli_affected_rows($connect);
}

function update($data)
{
  $connect = connect();

  $id = $data['id'];
  $tanggal_tahun = htmlspecialchars($data['tanggal_tahun']);
  $waktu_mulai = htmlspecialchars($data['waktu_mulai']);
  $waktu_selesai = htmlspecialchars($data['waktu_selesai']);
  $keterangan = htmlspecialchars($data['keterangan']);
  $uraian_kegiatan = htmlspecialchars($data['uraian_kegiatan']);

  $query = "UPDATE laporan 
              SET
              tanggal_tahun = '$tanggal_tahun',
              waktu_mulai = '$waktu_mulai',
              waktu_selesai = '$waktu_selesai',
              keterangan = '$keterangan',
              uraian_kegiatan = '$uraian_kegiatan'
            WHERE laporan_id = '$id' AND users.id_user = laporan.id_user
            ";

  mysqli_query($connect, $query);

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
