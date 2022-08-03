<?php

require "../../pages/functions.php";

$lpr_user = query("SELECT users.id_user, foto_profile, nama, nik FROM users");

var_dump($lpr_user);
