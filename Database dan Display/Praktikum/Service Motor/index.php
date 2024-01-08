<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Bahagia Sejahtera</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Bengkel Bahagia Sejahtera</h2>
        <h4>Form Pendaftaran Layanan Service Motor</h4>

        <form action="proses.php" method="post">
            <label for="pelanggan_id">Nama Pelanggan:</label>
            <select id="pelanggan_id" name="pelanggan_id" required>
                <?php
                include 'koneksi.php';

                $sqlPelanggan = "SELECT * FROM pelanggan";
                $resultPelanggan = $conn->query($sqlPelanggan);

                while ($rowPelanggan = $resultPelanggan->fetch_assoc()) {
                    echo "<option value='{$rowPelanggan['id']}'>{$rowPelanggan['nama']}</option>";
                }
                ?>
            </select>

            <label for="merek">Merek Motor:</label>
            <input type="text" id="merek" name="merek" required>

            <label for="jenis">Jenis Motor:</label>
            <input type="text" id="jenis" name="jenis" required>

            <label for="nomor_polisi">Nomor Polisi:</label>
            <input type="text" id="nomor_polisi" name="nomor_polisi" required>

            <label for="tahun_pembuatan">Tahun Pembuatan:</label>
            <input type="number" id="tahun_pembuatan" name="tahun_pembuatan" required>

            <label for="tanggal_layanan">Tanggal Layanan:</label>
            <input type="date" id="tanggal_layanan" name="tanggal_layanan" required>

            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan" rows="4" required></textarea>

            <label for="biaya">Biaya:</label>
            <input type="text" id="biaya" name="biaya" required>

            <label for="mekanik_id">Mekanik:</label>
            <select id="mekanik_id" name="mekanik_id[]" multiple required>
                <?php
                $sqlMekanik = "SELECT * FROM mekanik";
                $resultMekanik = $conn->query($sqlMekanik);

                while ($rowMekanik = $resultMekanik->fetch_assoc()) {
                    echo "<option value='{$rowMekanik['id']}'>{$rowMekanik['nama']}</option>";
                }
                ?>
            </select>

            <input type="submit" value="Daftar Layanan">
        </form>

        <a href="tampil.php" class="btn-lihat">Lihat Data</a>
    </div>

</body>

</html>