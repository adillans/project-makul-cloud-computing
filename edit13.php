<?php
include "koneksi13.php";

$kode_barang = $_GET['kode'];

$query = "SELECT * FROM tabel13 WHERE kode_barang = '$kode_barang'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>
    <form method="post" action="editsimpan13.php">
        <label>Kode Barang:</label><br>
        <input type="text" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" readonly><br>
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required><br>
        <label>Satuan:</label><br>
        <input type="text" name="satuan" value="<?php echo $row['satuan']; ?>" required><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br>
        <input type="submit" value="Simpan Edit">
    </form>
</body>
</html>
