<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <h2>Perpustakaan Universitas PGRI Madiun</h2>
        <h4>Form Peminjaman Buku</h4>

        <form action="proses.php" method="post">
            <!-- Isi formulir sesuai kebutuhan Anda -->
            <label for="judul">Judul Buku:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="pengarang">Pengarang:</label>
            <input type="text" id="pengarang" name="pengarang" required>

            <label for="penerbit">Penerbit:</label>
            <input type="text" id="penerbit" name="penerbit" required>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit" required>

            <label for="stok">Stok Buku:</label>
            <input type="number" id="stok" name="stok" required>

            <label for="status">Status Pengembalian:</label>
            <select id="status" name="status" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Dipinjam">Dipinjam</option>
            </select>

            <label for="nama_peminjam">Nama Peminjam (jika dipinjam):</label>
            <input type="text" id="nama_peminjam" name="nama_peminjam">

            <input type="submit" value="Simpan">
        </form>

        <a href="tampil.php" class="btn-lihat">Lihat Data</a>
    </div>

</body>

</html>