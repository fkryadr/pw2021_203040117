<?php 
// Fikri Ardiansyah
// 203040117
// Shift Kamis 08:00
?>

<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++)
    {
        for ($j = 1; $j <= $i; $j++)
        {
            echo "<div class = 'bola'>". $i ."</div>";
        }
            echo "<br>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c_203040117</title>
    <style>
        .bola {
            background-color: salmon;
            font-size: 20px;
            height: 30px;
            display: inline-block;
            margin: 2px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            border: 2px solid black;
            border-radius: 50%;
        }
        .container {
            border: 2px solid black;
            padding: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <?php echo tumpukanBola(5); ?>    
    </div>

</body>
</html>