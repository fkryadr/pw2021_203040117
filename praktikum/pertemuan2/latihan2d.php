<?php
//Fikri Ardiansyah
//203040117
//Shift Kamis 08.00
?>

<?php
function hitungDeterminan($w, $x, $y, $z)
{
    // baris code perhitung determinan

    //menampilkan matriks
echo "<table style ='border-left: 2px solid black; border-right: 2px solid black;' cellspacing='5' cellpadding='5'>
    <tr>
        <td> $w </td>
        <td> $x </td>
    </tr>
    <tr>
        <td> $y </td>
        <td> $z </td>
    </tr>
    </table>";
    $determinan = (($w * $z) - ($y * $x));
echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .matrix {
            border: 1px solid black;
            padding: 10px;
            color: black;
            width: 320px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2d_203040117</title>
</head>
<body>
    <div class="matrix">
        <?php 
            hitungDeterminan(1, 2, 3, 4)
        ?>
    </div>
</body>
</html>