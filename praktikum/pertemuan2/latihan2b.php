<?php 
// Fikri Ardiansyah
// 203040117
// Shift Kamis 08:00
?>

<?php
    $pernyataanIsset = "Isset adalah =  untuk memeriksa apakah suatu variabel sudah diatur atau belum. Fungsi isset () mengembalikan false jika variabel pengujian berisi nilai NULL.";
    $pernyataanEmpty = "Empty adalah = untuk memeriksa apakah sebuah objek form telah diisi atau tidak, Fungsi empty() akan menghasilkan nilai false jika sebuah variabel telah diisi, dan bernilai true jika variabel tersebut belum diisi.";
    $GLOBALS['varIsset'] = $pernyataanIsset;
    $GLOBALS['varEmpty'] = $pernyataanEmpty;

    function latihan2b($style) {
        echo "<div class = $style>
        <h1>".$GLOBALS['varIsset']."</h1>
        <h1>".$GLOBALS['varEmpty']."</h1>
        </div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2b_203040117</title>
    <style>
        .container {
            font-size: 8px;
            padding-left: 10px;
            border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php echo latihan2b("container");?>
</body>
</html>

