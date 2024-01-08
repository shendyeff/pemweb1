<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Pendaftaran Pasien</title>
    <link rel="stylesheet" href="styleFormKlinik.css" />
</head>

<body>
    <h2>Hasil Pendaftaran Pasien</h2>

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

    // Ambil data dari database
    $sql = "SELECT * FROM data_pasien ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <div class="hasil-form">
        <p>Nama Lengkap: <?php echo $row['nama']; ?></p>
        <p>Alamat: <?php echo $row['alamat']; ?></p>
        <p>Nomor Telepon: <?php echo $row['telepon']; ?></p>
        <p>Jenis Kelamin: <?php echo $row['jenis_kelamin']; ?></p>
        <p>Tanggal Lahir: <?php echo $row['tanggal_lahir']; ?></p>
        <p>Keluhan: <?php echo $row['keluhan']; ?></p>
    </div>
    <?php
    } else {
        echo "Tidak ada data yang ditemukan.";
    }

    // Tutup koneksi
    $conn->close();
    ?>
</body>

</html>