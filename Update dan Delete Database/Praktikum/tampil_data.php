<?php
include 'koneksi.php';

$sql = "SELECT * FROM komik";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['judul']}</td>
                <td>{$row['pengarang']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                    <a href='proses_hapus.php?id={$row['id']}' class='btn-hapus'>Hapus</a>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data komik.</td></tr>";
}

$conn->close();
?>