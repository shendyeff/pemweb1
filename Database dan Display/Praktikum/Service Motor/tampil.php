<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Layanan Service Motor</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>

    <div class="container">
        <h2>Data Layanan Service Motor</h2>

        <?php
        include 'koneksi.php';

        $sql = "SELECT layanan.id, pelanggan.nama as nama_pelanggan, motor.merek, motor.jenis, motor.nomor_polisi, 
                       motor.tahun_pembuatan, layanan.tanggal_layanan, layanan.keterangan, layanan.biaya, 
                       GROUP_CONCAT(mekanik.nama SEPARATOR ', ') as mekanik_names
                FROM layanan
                JOIN motor ON layanan.motor_id = motor.id
                JOIN pelanggan ON motor.pelanggan_id = pelanggan.id
                LEFT JOIN layanan_mekanik ON layanan.id = layanan_mekanik.layanan_id
                LEFT JOIN mekanik ON layanan_mekanik.mekanik_id = mekanik.id
                GROUP BY layanan.id";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>ID Layanan</th>
                        <th>Nama Pelanggan</th>
                        <th>Merek Motor</th>
                        <th>Jenis Motor</th>
                        <th>Nomor Polisi</th>
                        <th>Tahun Pembuatan</th>
                        <th>Tanggal Layanan</th>
                        <th>Keterangan</th>
                        <th>Biaya</th>
                        <th>Mekanik</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama_pelanggan']}</td>
                        <td>{$row['merek']}</td>
                        <td>{$row['jenis']}</td>
                        <td>{$row['nomor_polisi']}</td>
                        <td>{$row['tahun_pembuatan']}</td>
                        <td>{$row['tanggal_layanan']}</td>
                        <td>{$row['keterangan']}</td>
                        <td>{$row['biaya']}</td>
                        <td>{$row['mekanik_names']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Tidak ada data layanan.</p>";
        }

        $conn->close();
        ?>

    </div>

</body>

</html>