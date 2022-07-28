<?php
require_once __DIR__ . '../../vendor/autoload.php';

require 'functions.php';

$users = query("SELECT users.ijazah, id_user FROM users");

$mpdf = new \Mpdf\Mpdf();
// ubahhhhh
// $html = '<!DOCTYPE html>
// <html lang="en">

// <head>
//   <meta charset="UTF-8" />
//   <title>Download Ijazah</title>
// </head>
// <body>';

//   echo $users["ijazah"]; ?>

<!-- // $html .= '</body>

// </html>'; -->

$html = 
$mpdf->WriteHTML($html);
$mpdf->Output();

