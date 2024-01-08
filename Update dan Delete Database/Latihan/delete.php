<?php
include "koneksi.php";

if (isset($_GET["npm"])) {
    $npm = $_GET["npm"];

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE npm=?");
    $stmt->bind_param("s", $npm);

    if ($stmt->execute()) {
        header("location:index.php?pesan=hapus");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>