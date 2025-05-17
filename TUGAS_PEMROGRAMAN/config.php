<?php
$host = "localhost";
$user = "root";
$pass = "keyyboy66";
$db = "pendaftaran_turnamen_mobile_legend";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>