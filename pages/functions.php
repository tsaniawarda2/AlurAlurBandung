<?php

function connect()
{
  // Koneksi ke Database
  $connect = mysqli_connect('localhost', 'root', '', 'lapps') or die('FAILED TO CONNECT!!');
  return $connect;
}

function query($sql)
{

  $connect = connect();

  $result = mysqli_query($connect, $sql) or die(mysqli_error($connect));

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
