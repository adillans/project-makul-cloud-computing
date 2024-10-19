<?php
include "koneksi13.php";

$query = "SELECT * FROM tabel13";
$result = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['kode_barang']; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['satuan']; ?></td>
            <td><?php echo $row['harga']; ?></td>
            <td>
                <a href="edit13.php?kode=<?php echo $row['kode_barang']; ?>">Edit</a>
                <a href="hapus13.php?kode=<?php echo $row['kode_barang']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
