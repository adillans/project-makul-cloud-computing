<?php
include "koneksi13.php";

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];

$query = "UPDATE tabel13 SET nama_barang = '$nama_barang', satuan = '$satuan', harga = '$harga' WHERE kode_barang = '$kode_barang'";

if (mysqli_query($connection, $query)) {
    header("Location: lihat13.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
?>
