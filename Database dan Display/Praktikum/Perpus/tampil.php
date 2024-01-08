<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

    <div class="container">
        <h2>Data Buku</h2>

        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM buku";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Nama Peminjam</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['judul']}</td>
                        <td>{$row['pengarang']}</td>
                        <td>{$row['penerbit']}</td>
                        <td>{$row['tahun_terbit']}</td>
                        <td>{$row['stok']}</td>
                        <td>{$row['status']}</td>
                        <td>{$row['nama_peminjam']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Tidak ada data buku.</p>";
        }

        $conn->close();
        ?>

    </div>

</body>

</html>