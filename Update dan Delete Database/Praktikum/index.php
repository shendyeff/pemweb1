<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aplikasi Komik</title>
</head>

<body>
    <div class="container">
        <h2>Aplikasi Komik</h2>
        <a href="form_tambah.php" class="btn">Tambah Komik</a>

        <table>
            <thead>
                <tr>
                    <th>Judul Komik</th>
                    <th>Pengarang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'tampil_data.php'; ?>
            </tbody>
        </table>
    </div>
</body>

</html>