<?php 

// require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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

        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="gambar/<?php $row["gambar"]; ?>"  width="50"> </td>
            <td>1941720062</td>
            <td>Faris Ikhlasul H</td>
            <td>farisih@gmail.com</td>
            <td>Tekinf</td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>