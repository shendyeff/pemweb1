<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

    <div class="container">
        <h2>Data Pasien</h2>

        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM data_pasien";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Keluhan</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['nama']}</td>
                    <td>{$row['alamat']}</td>
                    <td>{$row['telepon']}</td>
                    <td>{$row['jenis_kelamin']}</td>
                    <td>{$row['tanggal_lahir']}</td>
                    <td>{$row['keluhan']}</td>
                    </tr>";

            }

            echo "</table>";
        } else {
            echo "<p>Tidak ada data pasien.</p>";
        }

        $conn->close();
        ?>

    </div>

</body>

</html>