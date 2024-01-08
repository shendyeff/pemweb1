<!DOCTYPE html>
<html>

<head>
    <title>Mengupdate Data di Database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="judul">
        <h1>Mengupdate Data di Database dengan PHP</h1>
        <h2>Update data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>

    <a href="index.php">Lihat Semua Data</a>

    <br />

    <br />

    <h3>Edit data</h3>

    <?php
    include "koneksi.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST["npm"];
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $kelas = $_POST["kelas"];

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("UPDATE mahasiswa SET nama=?, alamat=?, kelas=? WHERE npm=?");
        $stmt->bind_param("ssss", $nama, $alamat, $kelas, $npm);

        if ($stmt->execute()) {
            header("location:index.php?pesan=update");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        $npm = $_GET['npm'];

        $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE npm=?");
        $stmt->bind_param("s", $npm);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc()) { ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" value="<?php echo $data['npm']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php }
    } ?>
</body>

</html>