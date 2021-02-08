<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: Login.php");
    exit;
}

require 'functions.php';

//ambil data URL
$id = $_GET["id"];
// var_dump($id);
//query data mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs);
if (isset($_POST["ubah"])) {
    //CEK DATA TERBARU
    if (update($_POST) > 0){
        // echo "data berhasil  ditambahkan";
        echo "
        <script>
            alert('data berhasil ubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } 
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>

    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <ul>
            <li>
                <label for="nrp"> NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="gambar/<?= $mhs['gambar']; ?>" alt="" width="40"><br>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <li>
                <button type="submit" name="ubah">ubah data</button>
            </li>
        </ul>
    </form>
</body>

</html>