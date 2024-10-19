<!DOCTYPE html>
<html>
<head>
    <title>Input Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="post" action="simpan13.php">
        <label>Kode Barang:</label><br>
        <input type="text" name="kode_barang" required><br>
        <label>Nama Barang:</label><br>
        <input type="text" name="nama_barang" required><br>
        <label>Satuan:</label><br>
        <input type="text" name="satuan" required><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" required><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
