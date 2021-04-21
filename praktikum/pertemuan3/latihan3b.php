<?php
// Fikri Ardiansyah
// 203040117
// Shift Kamis 08

?>

<?php 
    $pemain = ["Mohammad salah","Cristiano Ronaldo","Lionel Messi","Zlatan Ibrahimovic","Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($pemain as $p) : ?>
        <li><?= $p?></li>
        <?php endforeach?>
    </ol>
    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php
            array_push($pemain,"Luca Modric","Sadio Mane");
            sort($pemain);
        ?>
        <?php foreach($pemain as $player) : ?>
        <li><?= $player?></li>
        <?php endforeach?>
    </ol>
</body>
</html>