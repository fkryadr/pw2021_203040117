<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
    
    .kotak {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
    }

    </style>
</head>
<body>
    

    <?php for ($i=1; $i <= 3; $i++) : ?>
        <?php for ($j = 1; $j <= $i; $j++) :?>
        <div class="kotak"><?= $i ?></div>
    <?php endfor; ?>
            <br>
    <?php endfor; ?>

<?php
// Fikri Ardiansyah 203040117
// Praktikum PW 
// Shift Kamis 08:00 
?>

</body>
</html>