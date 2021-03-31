<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn,"pw_tubes_203040117") or die ("Database salah!");
    $result = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4A</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>PRODUK</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Nama Produk</th>
          <th>Deskripsi</th>
        </tr>
        <?php $i = 1; ?>
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img width="100px" src="assets/img/<?=$row["gambar_produk"]; ?>"></td>
             <td><?=$row["nama_produk"]; ?></td>
             <td><?=$row["deskripsi"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endwhile; ?>

    </table>
</body>
</html>