<?php
$nama = $_POST['nama'];
$myfile = fopen("intro.txt", "a") or die("Unable to open file!");
fwrite($myfile, $nama . "\n");
fclose($myfile);
header('location:index.php');
