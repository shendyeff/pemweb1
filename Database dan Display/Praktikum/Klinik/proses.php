<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $keluhan = $_POST["keluhan"];

    $sql = "INSERT INTO data_pasien (nama, alamat, telepon, jenis_kelamin, tanggal_lahir, keluhan)
            VALUES ('$nama', '$alamat', '$telepon', '$jenis_kelamin', '$tanggal_lahir', '$keluhan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php"); // Arahkan ke tampil.php setelah berhasil menyimpan data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>