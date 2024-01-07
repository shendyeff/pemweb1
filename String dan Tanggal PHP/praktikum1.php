<html>

<head>
    <title>Praktikum Tanggal</title>
</head>

<body>

    <?php
    $namahari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
    $namabulan = array("", "Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    echo $namahari[date("w")] . ", " . date("j") . " " . $namabulan[date("n")] . " " . date("Y") . "<br />";
    // ini menampilkan dengan format "Hari, Tanggal Bulan Tahun"

    echo date("Y/m/d") . "<br />";
    // ini menampilkan dengan format 2017/10/02

    echo date("l, d-m-Y") . "<br />";
    // ini menampilkan dengan format "Day, Tanggal-Bulan-Tahun"

    echo date("d F Y") . "<br />";
    // ini menampilkan dengan format 02 Oktober 2017

    echo date("h:i:s") . "<br />";
    // ini menampilkan dengan format 00:31:04

    echo date("l, d-m-Y h:i:s") . "<br />";
    // ini menampilkan dengan format "Day, Tanggal-Bulan-Tahun Jam:Menit:Detik"
    ?>

</body>

</html>