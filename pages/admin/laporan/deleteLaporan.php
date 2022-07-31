<?php
require '../../functions.php';

session_start();
if (isset($_SESSION['idUser'])) {
  header("Location: ../../../index.php");
  exit;
}

$id = $_GET['id'];

if (deleteLaporan($id) > 0) {
  echo "
    <script>
      alert('data berhasil dihapus!');
      document.location.href = 'daftar.php';
    </script>
    ";
} else {
  echo "
  <script>
    alert('data gagal dihapus!');
    document.location.href = 'daftar.php';
  </script>
  ";
}
