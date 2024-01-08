<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $stok = $_POST["stok"];
    $status = $_POST["status"];
    $nama_peminjam = isset($_POST["nama_peminjam"]) ? $_POST["nama_peminjam"] : null;

    $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun_terbit, stok, status, nama_peminjam)
            VALUES ('$judul', '$pengarang', '$penerbit', '$tahun_terbit', '$stok', '$status', '$nama_peminjam')";

    if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php"); // Arahkan ke tampil.php setelah berhasil menyimpan data
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
