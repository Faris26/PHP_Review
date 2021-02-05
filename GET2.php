<?php 
if( !isset($_GET["nama"]) || !isset($_GET["nrp"])){
    //redirect
    header("Location: GET.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <!-- <li><img src="img/faris.JPG"></li> -->
        <li><?= $_GET["nama"] ?></li>
        <!-- <li><?= $_GET["nrp"] ?></li>
        <li><?= $_GET["email"] ?></li> -->
        <li>tekinf</li>
    </ul>

    <a href="GET.php">kembali ke daftar</a>
</body>
</html>