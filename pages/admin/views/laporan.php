<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "lapps");

// Query
$result = mysqli_query($conn, "SELECT nama, unit_kerja, jabatan, tanggal_tahun FROM users, laporan");

// Ubah Data ke Array
$row = mysqli_fetch_row($result);
var_dump($row);
?>

<div class="row">
  <div class="col-lg-12">
    <h1>Laporan User <small>Daftar</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="icon-files"></i> Laporan</a></li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="table-responsive">
      <table class="table table-bordered table-hover table-striped">
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>Unit Kerja</th>
          <th>Jabatan</th>
          <th>Tanggal Publish</th>
          <th>Opsi</th>
        </tr>
        <tr>
          <td align="center">sd</td>
          <td>s</td>
          <td>s</td>
          <td>f</td>
          <td>
            <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
            <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</button>
            <button type="button" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
          </td>
        </tr>
      </table>
      <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> ADD</button>
      <button type="button" class="btn btn-primary"><i class="fa fa-print"></i> PRINT</button>
    </div>
  </div>
</div>