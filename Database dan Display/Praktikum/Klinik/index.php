<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pasien</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Klinik Kecamatan Manguharjo</h2>
        <h4>Form Pendaftaran Pasien</h4>

        <form action="proses.php" method="post">
            <!-- Isi formulir sesuai kebutuhan Anda -->
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="telepon">Nomor Telepon:</label>
            <input type="number" id="telepon" name="telepon" placeholder="Contoh: 081234567890" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

            <label for="keluhan">Keluhan:</label>
            <textarea id="keluhan" name="keluhan" rows="4" required></textarea>

            <input type="submit" value="Daftar">
        </form>

        <a href="tampil.php" class="btn-lihat">Lihat Data</a>
    </div>

</body>

</html>