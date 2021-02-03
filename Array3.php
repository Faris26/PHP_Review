<?php
$mahasiswa = [
    ["Faris Ikhlasul H", "082257744131", "Teknik Informatika", "Email"],
    ["Rafi S", "082257744131", "Teknik Kimia", "Email"],
    ["Ghani S", "082257744131", "Teknik Kimia", "Email"]
];

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- 2 Dimensi -->
    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <!-- 1 Dimensi -->

    <!--  <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->

</body>

</html>