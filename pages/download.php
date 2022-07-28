<?php
require_once __DIR__ . '../../vendor/autoload.php';

// require 'functions.php';

// $users = query("SELECT users.ijazah, id_user FROM users");

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Halo Alsa!</h1>');
$mpdf->Output();

