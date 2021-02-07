<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Home</title>
</head>

<body>
    <a href="tambah.php"> Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?= $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin bos?');">ubah</a>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin bos?');">hapus</a>
                </td>
                <td><img src="gambar/<?= $row["gambar"]; ?>" width="50"> </td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>