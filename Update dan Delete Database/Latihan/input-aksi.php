<?php
include "koneksi.php";

$npm = $_POST["npm"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$kelas = $_POST["kelas"];

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO mahasiswa (npm, nama, alamat, kelas) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $npm, $nama, $alamat, $kelas);

// Execute the statement
if ($stmt->execute()) {
    header("location:index.php?pesan=input");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>