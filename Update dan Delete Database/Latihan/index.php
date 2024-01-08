<!DOCTYPE html>
<html>

<head>
    <title>Membuat Database dan Menampilkan data dari database dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>

    <br />

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];

        if ($pesan == "input") {
            echo "Data berhasil di input.";
        } else if ($pesan == "update") {
            echo "Data berhasil di update.";
        } else if ($pesan == "hapus") {
            echo "Data berhasil di hapus.";
        }
    }
    ?>

    <br />

    <a class="tombol" href="input.php">* Tambah Data Baru</a>

    <h3>Data user</h3>

    <table border="1" class="table">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Opsi</th>
        </tr>

        <?php
        include "koneksi.php";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM mahasiswa");

        while ($data = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $data['npm']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
            <td>
                <a class="edit" href="update.php?npm=<?php echo $data['npm']; ?>">Edit</a> |
                <a class="hapus" href="delete.php?npm=<?php echo $data['npm']; ?>">Hapus</a>
            </td>
        </tr>

        <?php } ?>

    </table>

    <?php
    $conn->close();
    ?>

</body>

</html>