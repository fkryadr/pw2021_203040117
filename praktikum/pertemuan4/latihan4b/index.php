<?php
    require 'functions.php';
    $produk = query("SELECT * FROM produk")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4B</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Daftar Produk</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama Produk</th>
          <th>Deskripsi</th>
        </tr>
        <?php $i = 1; ?>
		<?php foreach ($produk as $prod) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img width="100px" src="assets/img/<?=$prod["gambar_produk"]; ?>"></td>
             <td><?=$prod["nama_produk"]; ?></td>
             <td><?=$prod["deskripsi"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>
</html>