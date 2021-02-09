<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
    exit;
}

require 'functions.php';

//pagination
//konfigurasi
$jumlahDataPerHalaman = 3;
//Lebih Rumit
// $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result);
//Lebih Simpel
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
if(isset($_GET["halaman"])){
    $halamanAktif = $_GET("halaman");
} else{
    $halamanAktif = 1;
}
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $halamanAktif;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 0, $jumlahDataPerHalaman");
//Tombol Cari
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
//round = membulatkan desimal terdekat 
//florr = membulatkan kebawah
//ceil = membulatkan keatas
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

    <a href="Logout.php"> Logout</a>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari !</button>

    </form>

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