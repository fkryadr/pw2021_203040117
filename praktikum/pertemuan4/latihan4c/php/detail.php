<?php
    if (!isset($_GET['id'])) {
        header("location:../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $produk = query("SELECT * FROM produk WHERE id_produk = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <style> 

    .tombol-kembali {
        width: 100px;
        height: 50px;
        border-radius: 100px;
        background-color: black;
    }

    .container {

        text-align: center;

    }

    .tombol-kembali a {

        font-size: 20px;
        font-weight: bold;

    }

    </style>
</head>
<body bgcolor="grey">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $produk["gambar_produk"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $produk["nama_produk"]; ?></p>
        <p><?= $produk["deskripsi"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>