<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_mahasiswa";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
