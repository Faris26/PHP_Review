<?php
// $mahasiswa = [
//     ["Faris Ikhlasul H", "082257744131", "Teknik Informatika", "Email"],
//     ["Rafi S", "082257744131", "Teknik Kimia", "Email"],
//     ["Ghani S", "082257744131", "Teknik Kimia", "Email"]
// ];

//Array Assosiative
// key =  String 
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
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Assosiative -->
    <!-- <?php echo $mahasiswa["nama"]; ?> -->

    <!-- <?php echo $mahasiswa[1]["nilai"][0]; ?> -->

    <!-- 2 Dimensi -->
    <!--  <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
         -->
    <!-- 1 Dimensi -->

    <!--  <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->

      <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
        <li>
        <img src="img/<?=$mhs["gambar"];?>">
        </li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
            <li><?= $mhs["email"]; ?></li>
            <!-- <li><?= $mhs[3]; ?></li> -->
        </ul>
    <?php endforeach; ?>

</body>

</html>