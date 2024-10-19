<?php
include "koneksi13.php";

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];

$query = "INSERT INTO tabel13 (kode_barang, nama_barang, satuan, harga) VALUES ('$kode_barang', '$nama_barang', '$satuan', '$harga')";

if (mysqli_query($connection, $query)) {
    header("Location: lihat13.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
?>
