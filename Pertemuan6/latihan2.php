<?php
// // $mahasiswa = [
// ["Fikri Ardiansyah", "203040117", "Teknik Informatika", "fkryadr@gmail.com"],
// ["Hervin Fakhrul", "203040097", "Teknik Informatika", "hervinfakhrulm@gmail.com"],
// ["Agam Kamil Atmaja", "20304086", "Teknik Informatika", "rkagam66@gmail.com"]
// ];
// // 

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Fikri Ardiansyah",
        "NRP" => "203040117",
        "Jurusan" => "Teknik Informatika",
        "Email" => "fkryadr@hotmail.com"
    ],
    [
        "nama" => "Dangs shut",
        "NRP" => "203040500",
        "Jurusan" => "Teknik Informatika",
        "Email" => "dangsh27@gmail.com"
    ]
    ];

    echo $mahasiswa[1]["Email"];
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
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>