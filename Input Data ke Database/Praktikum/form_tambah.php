<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tambah Komik</title>
</head>

<body>
    <div class="container">
        <h2>Tambah Komik</h2>
        <form action="proses_tambah.php" method="post">
            <label for="judul">Judul Komik:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="pengarang">Pengarang:</label>
            <input type="text" id="pengarang" name="pengarang" required>

            <input type="submit" value="Tambah" class="btn-tambah">
        </form>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>

</html>