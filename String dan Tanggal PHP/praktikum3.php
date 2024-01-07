<html>

<head>
    <title>Tugas String dan Tanggal</title>
</head>

<body>

    <form>
        Masukkan Nama, Email dan Password <br>
        <br>
        Default Nama = belajar, Email = test@gmail.com dan Password = madiun
        Isian data : <br>
        Nama : <input type="text" name="nama"><br>
        Email: <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="Cek"><br>
    </form>

    <?php

    if (isset($_GET['email'])) {
        $email = $_GET['email'];

        if (empty($email)) {
            print("Harap mengisi email <br>\n");
        } else {
            // if (ereg("^.+@+\\..+$", $email)) // Deprecated, use filter_var instead
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print("Alamat email $email valid<br>\n");
            } else {
                print("Alamat email $email tidak valid<br>\n");
            }
        }
    }

    if (isset($_GET['password'])) {
        $nama = "belajar";
        $password = $_GET['password'];

        $pass_valid = crypt("madiun", $nama);
        $enkripsi = crypt($password, $nama);

        if ($pass_valid == $enkripsi) {
            print("Password valid");
        } else {
            print("Password salah");
        }
    }

    ?>

</body>

</html>