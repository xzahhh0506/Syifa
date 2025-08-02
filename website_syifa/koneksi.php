<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "website_syifa";

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
