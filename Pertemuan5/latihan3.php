<?php
$mahasiswa = [
["Fikri Ardiansyah", "203040117", "Teknik Informatika", "fkryadr@gmail.com"],
["Hervin Fakhrul", "203040097", "Teknik Informatika", "hervinfakhrulm@gmail.com"],
["Agam Kamil Atmaja", "20304086", "Teknik Informatika", "rkagam66@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>