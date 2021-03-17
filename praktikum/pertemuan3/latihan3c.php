<?php
// Fikri Ardiansyah
// 203040117
// Shift Kamis 08

?>

<?php
$pemain = [
    "Liverpool " => "Mohammad salah",
    "Juventus" => "Cristiano Ronaldo",
    "Barcelona" => "Lionel Messi",
    "AC Milan" => "Zlatan Ibrahimovic",
    "Paris Saint Germain" => "Neymay Jr",
    "Real Madrid" => "Luca Modric",
    "Liverpool" => "Sadio Mane"
];
asort($pemain);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
    .container {
        border: 1px solid black;
        width: 500px;
        padding: 10px;
    }
    </style>
</head>

<body>
    <div class="container">
        <table>
            <h3 style="margin:0;">Daftar pemain bola terkenal dan clubnya</h3>
            <br>
            <?php foreach ($pemain as $club => $pemain) : ?>
                <tr>
                    <td style="font-weight: bold;"><?= $pemain ?></td>
                    <td>: <?= $club ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>