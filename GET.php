<?php
$mahasiswa = [
    [
        "nama" => "Faris Galih",
        "nrp" => "1941720062",
        "email" => "farisikhlasulhaq",
        "gambar" => "faris.jpg"
    ],
    [
        "nama" => "GH",
        "nrp" => "1941720061",
        "email" => "gh@gmail",
        "gambar" => "gh.jpg"
        // "nilai" => [80,90,100]
    ]
];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar</h1>
    <!-- <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"] ?>" ></li>
        <li><?php echo $mhs["nama"]; ?></li>
        <li><?php echo $mhs["nrp"]; ?></li>
    </ul>
    <?php endforeach; ?> -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="GET2.php?nama= <?= $mhs["nama"];?> &nrp=<?= $mhs["nrp"]; ?>">
                    <?php echo $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>