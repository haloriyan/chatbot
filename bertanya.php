<?php

$tny = $_POST['tanya'];
$tanya = urlencode(strtolower($tny));

$url = "http://wandawafiq.net/api.php?token=POKkIBZ3QBR3VZFgmkgpte7EJ&tanya=".$tanya;
$get = file_get_contents($url);

$bot = json_decode($get);

setcookie('jawaban',$bot->jawab,time() + 50, "/");