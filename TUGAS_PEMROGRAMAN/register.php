<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_tim = $_POST['nama_tim'];
    $ketua_tim = $_POST['ketua_tim'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $anggota1 = $_POST['anggota1'];
    $anggota2 = $_POST['anggota2'];
    $anggota3 = $_POST['anggota3'];
    $anggota4 = $_POST['anggota4'];

    $sql = "INSERT INTO peserta (nama_tim, ketua_tim, no_hp, email, anggota1, anggota2, anggota3, anggota4)
            VALUES ('$nama_tim', '$ketua_tim', '$no_hp', '$email', '$anggota1', '$anggota2', '$anggota3', '$anggota4')";

    if (mysqli_query($conn, $sql)) {
        header("Location: success.php");
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}
?>