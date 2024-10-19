<?php
include "koneksi13.php";

$kode_barang = $_GET['kode'];

$query = "DELETE FROM tabel13 WHERE kode_barang = '$kode_barang'";

if (mysqli_query($connection, $query)) {
    header("Location: lihat13.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
?>
