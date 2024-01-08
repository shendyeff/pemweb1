<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pelanggan_id = $_POST["pelanggan_id"];
    $merek = $_POST["merek"];
    $jenis = $_POST["jenis"];
    $nomor_polisi = $_POST["nomor_polisi"];
    $tahun_pembuatan = $_POST["tahun_pembuatan"];
    $tanggal_layanan = $_POST["tanggal_layanan"];
    $keterangan = $_POST["keterangan"];
    $biaya = $_POST["biaya"];
    $mekanik_ids = $_POST["mekanik_id"];

    // Insert data into motor table
    $sqlMotor = "INSERT INTO motor (pelanggan_id, merek, jenis, nomor_polisi, tahun_pembuatan)
                 VALUES ('$pelanggan_id', '$merek', '$jenis', '$nomor_polisi', '$tahun_pembuatan')";
    
    if ($conn->query($sqlMotor) === TRUE) {
        $motor_id = $conn->insert_id; // Get the ID of the last inserted motor
        
        // Insert data into layanan table
        $sqlLayanan = "INSERT INTO layanan (motor_id, tanggal_layanan, keterangan, biaya)
                       VALUES ('$motor_id', '$tanggal_layanan', '$keterangan', '$biaya')";
        
        if ($conn->query($sqlLayanan) === TRUE) {
            $layanan_id = $conn->insert_id; // Get the ID of the last inserted layanan
            
            // Insert data into layanan_mekanik table for each selected mekanik
            foreach ($mekanik_ids as $mekanik_id) {
                $sqlLayananMekanik = "INSERT INTO layanan_mekanik (layanan_id, mekanik_id)
                                     VALUES ('$layanan_id', '$mekanik_id')";
                $conn->query($sqlLayananMekanik);
            }

            header("Location: tampil.php");
            exit();
        } else {
            echo "Error: " . $sqlLayanan . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sqlMotor . "<br>" . $conn->error;
    }
}

$conn->close();
?>