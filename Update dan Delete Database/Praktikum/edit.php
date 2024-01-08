<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Komik</title>
</head>

<body>
    <div class="container">
        <?php
        include 'koneksi.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $judul = $_POST["judul"];
            $pengarang = $_POST["pengarang"];

            $sql = "UPDATE komik SET judul='$judul', pengarang='$pengarang' WHERE id='$id'";

            if ($conn->query($sql) === TRUE) {
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $id = $_GET["id"];
        $sql = "SELECT * FROM komik WHERE id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <h2>Edit Komik</h2>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="judul">Judul Komik:</label>
            <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>

            <label for="pengarang">Pengarang:</label>
            <input type="text" id="pengarang" name="pengarang" value="<?php echo $row['pengarang']; ?>" required>

            <input type="submit" value="Simpan">
        </form>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>

</html>