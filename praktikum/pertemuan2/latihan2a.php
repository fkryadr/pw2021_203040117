<?php 
// Latihan2a.php
// Fikri Ardiansyah 
// NRP 203040117
// Shift Kamis 08:00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2a_203040117</title>
    <style>
    .sambutan {
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding-left: 20px;
        }
        

        .container {
            border: 1px solid black;
            box-shadow: 5px 5px 5px 5px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <?php 
        function italicBold($text, $style, $style2) {

            echo "<div class = '$style2'>
                  <h3 class = '$style'> $text </h3>
                  </div>";
        }
    ?>
        <?php echo italicBold("Selamat datang di praktikum PW", "sambutan", "container"); ?>


</body>
</html>