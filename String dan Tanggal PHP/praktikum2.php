<html>

<head>
    <title>Praktikum String dan Tanggal</title>
</head>

<body>

    <?php
    $kalimat = "Universitas PGRI Madiun";

    printf("Hasil Strlen: %s<br>\n", strlen($kalimat));
    printf("Hasil Strtoupper: %s<br>\n", strtoupper($kalimat));
    printf("Hasil Strtolower: %s<br>\n", strtolower($kalimat));
    printf("Hasil Ucfirst: %s<br>\n", ucfirst($kalimat));
    printf("Hasil Ucwords: %s<br>\n", ucwords($kalimat));
    print("Aslinya: $kalimat<br>\n");

    printf("Tanggal Sekarang: %s", date("d F Y"));
    echo "<br>";
    ?>

</body>

</html>