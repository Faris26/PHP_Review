<?php 

function salam($waktu = "Datang", $nama= "User"){
    return "Selamat $waktu, $nama";
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Faris"); ?></h1>
</body>
</html>