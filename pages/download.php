<?php
require_once __DIR__ . '../../vendor/autoload.php';

require 'functions.php';

$users = query("SELECT users.ijazah, id_user FROM users");

$mpdf = new \Mpdf\Mpdf();
$html = '<html>
  <head>
    <title>Dokumen Ijazah</title>
  </head>
  <body>';
     
  echo $users["ijazah"];

 $html .= '</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

