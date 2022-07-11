<?php
require_once __DIR__ . '\..\vendor\autoload.php';
require 'functions.php';

// if (isset($_GET['cari'])) {
//   $buku = cari($_GET['keyword']);
// } else {
//   $buku = query("SELECT * FROM buku");
// }

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leviosa Store</title>
    <link rel="stylesheet" href="../css/laporan.css">
  </head>
  <body>
    <h1>Leviosa Store</h1>
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Uraian Kegiatan</th>
      </tr>';

$i = 1;
foreach ($buku as $daftar) {
  $html .= '<tr>
              <td>' . $i++ . '</td>
              <td><img src="../assets/img/' . $daftar["Gambar"] . '" ></td>
              <td>' . $daftar["Judul"] . '</td>
              <td>' . $daftar["Penulis"] . '</td>
              <td>' . $daftar["Sinopsis"] . '</td>
              <td>' . $daftar["Tahun_Terbit"] . '</td>
              <td>' . $daftar["Harga"] . '</td>
            </tr>';
}

$html .= '</table>
  </body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('list-books.pdf', \Mpdf\Output\Destination::INLINE);
