<?php
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
$host = "localhost";
$username = "root";
$password = "";
$database = "klinik_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$keluhan = $_POST['keluhan'];

// Simpan data ke database
$sql = "INSERT INTO data_pasien (nama, alamat, telepon, jenis_kelamin, tanggal_lahir, keluhan)
        VALUES ('$nama', '$alamat', '$telepon', '$jenis_kelamin', '$tanggal_lahir', '$keluhan')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>