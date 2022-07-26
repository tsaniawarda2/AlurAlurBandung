<?php
require '../../functions.php';

// session_start();
// if (isset($_SESSION['idUser'])) {
//   header("Location: ../../../index.php");
//   exit;
// }

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
};


$id = $_GET['id'];

if (deleteUser($id) > 0) {
  echo "
    <script>
      alert('Data berhasil dihapus!');
      document.location.href = 'index.php';
    </script>
    ";
} else {
  echo "
  <script>
    alert('Data gagal dihapus!');
    document.location.href = 'index.php';
  </script>
  ";
}
