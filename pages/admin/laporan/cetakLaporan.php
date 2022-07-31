<?php

require_once __DIR__ . '\..\..\..\vendor\autoload.php';

require '../../functions.php';
$id = $_GET['id'];

$lpr_doc = query(
  "SELECT users.id_user, laporan.laporan_id, tanggal_tahun, uraian_kegiatan 
    FROM users, laporan 
    WHERE users.id_user = $id AND users.id_user = laporan.id_user 
    ORDER BY laporan.tanggal_tahun ASC"
);
$lpr_user = query("SELECT users.id_user, nama, unit_kerja, jabatan FROM users WHERE users.id_user = $id");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Pegawai</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../assets/css/lineicons.css" />
  <link rel="stylesheet" href="../../../assets/css/main.css" />
  <link rel="stylesheet" href="../../../assets/css/laporan.css" />
</head>
<body>
<section class="section">
  <div class="container-fluid">
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="mx-5 text-center">
            <h2>Laporan Pegawai ' . $lpr_user['nama'] . '</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="tablePDF">
      <div class="row">
        <div class="col-lg-12">
          <h6 class="mt-5 mb-3">Nama: ' . $lpr_user['nama'] . '</h6>
          <h6 class="mb-3">Unit Kerja: ' . $lpr_user['unit_kerja'] . '</h6>
          <h6 class="mb-3">Jabatan: ' . $lpr_user['jabatan'] . '</h6>
          <div class="card-style mb-30">
            <div class="table-wrapper table-responsive">
              <table class="table container-fluid">
                <thead>
                  <tr>
                    <th>
                      <h6>No</h6>
                    </th>
                    <th>
                      <h6>Tanggal</h6>
                    </th>
                    <th id="uraianK">
                      <h6>Uraian Kegiatan</h6>
                    </th>
                                  </tr>
                  <!-- end table row-->
                </thead>
                <tbody>';
$no = 1;
foreach ($lpr_doc as $ld) {
  $html .= '<tr>
              <td>
                <p>' . $no++ . '</p>
              </td>
              <td>
                <p>' . $ld['tanggal_tahun'] . '</p>
              </td>
              <td>';

  if ($ld['uraian_kegiatan'] == '') {
    $html .= '  <p>Sakit</p>';
  } else {
    $html .= '  <p>' . $ld['uraian_kegiatan'] . '</p>';
  }
  '           </td>
            </tr>';
}
$html .=       '</tbody>
              </table>
              <!-- end table -->
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
    </div>
  </div>
</section>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('laporan-pegawai.pdf', 'I');
