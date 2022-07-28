<?php
require_once __DIR__ . '../../vendor/autoload.php';

require 'functions.php';

$users = query("SELECT users.ijazah, nama, id_user FROM users");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Download Ijazah</title>
</head>
<body>';
foreach ($users as $lu) :
    ?>
      <tr>
        <td id="act-icon">
          <div class="action">
            <a href="detail.php?id=<?= $lu["ijazah"]; ?>">
            </a>
          </div>
        </td>
      </tr>
    <?php endforeach; ?>
$html .= '</body>

</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();

