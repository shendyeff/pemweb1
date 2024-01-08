<!DOCTYPE html>
<html>
<head>
    <title>Membuat Koneksi Dengan PHP Dan MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="judul">
        <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
        <h3>www.unipma.ac.id</h3>
    </div>

    <br />
    <br />

    <h3>Data Mahasiswa</h3>

    <table border="1" class="table">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelas</th>
        </tr>

        <?php
        include "koneksi.php";

        $result = $conn->query("SELECT * FROM mahasiswa");

        if ($result) {
            while ($data = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $data['npm']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='4'>Error: " . $conn->error . "</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
</body>
</html>
