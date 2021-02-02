<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .warna {
      background-color: yellow;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <table border="1" class="warna">
    <?php for ( $i = 0; $i < 5; $i++) { ?>
      <?php if ($i % 2 == 1) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for ($j = 0; $j < 5; $j++) { ?>
          <td> <?= "$i,$j" ?> </td>
        <?php } ?>
        </tr>
      <?php } ?>

  </table>
</body>

</html> 