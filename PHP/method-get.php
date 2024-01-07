<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Get</title>
</head>

<body>
    <form action="" method="get">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type="submit" name="submit" value="Simpan">&nbsp;
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if (isset($_GET["submit"])) {
        $nama = $_GET["nama"];
        $nim = $_GET["nim"];

        echo "<br><br> INI OUTPUT INPUTAN DARI FORM DIATAS<br>";
        echo "Nama: ". $nama;
        echo "<br>NIM: ". $nim;
        }
    ?>
</body>

</html>