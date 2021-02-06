<?php 

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
// Ambil data mahasiswa / query
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ambil data (fetch) mahasiswa dari objek result
//mysqlu_fetch_row() // mengembalikan array numerik
// mysqlu_fetch_assoc() // '' array associative
//mysqli_fetch_array() // '' keduanya
//mysqli_ferch_object()

// mysqli_fetch_row($result);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Home</title>
</head>
<body>
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
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="gambar/<?= $row["gambar"]; ?>"  width="50"> </td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
       <!--  <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <?php endwhile; ?> -->
    </table>
</body>
</html>