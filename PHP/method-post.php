<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Post</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Matakuliah</td>
                <td>:</td>
                <td>
                    <select name="mk" id="">
                        <option value="">----Pilih Matakuliah----</option>
                        <option value="pemrograman terstruktur">Pemrograman Terstruktur</option>
                        <option value="pemrograman web">Pemrograman Web</option>
                        <option value="pemrograman berorientasi objek">Pemrograman Berorientasi Objek</option>
                        <option value="algoritma & struktur data">Algoritma & Struktur Data</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="laki-laki">Laki-laki <br>
                    <input type="radio" name="jk" value="perempuan">Perempuan <br>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr align="center">
                <td colspan="3"><input type="submit" name="submit" value="Simpan">&nbsp;
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if (isset($_POST["submit"])) {
            $nama = $_POST ["nama"];
            $mk = $_POST ["mk"];
            $jk = $_POST ["jk"];
            $email = $_POST ["email"];

            echo "INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS <br>";
            echo "Nama: ". $nama;
            echo "<br>Matakuliah: ". $mk;
            echo "<br>Jenis Kelamin: ". $jk;
            echo "<br>Email: ". $email;
        }
    ?>
</body>

</html>