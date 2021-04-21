<?php
    require 'php/functions.php';
    $produk = query("SELECT * FROM produk")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4C</title>
</head>
<body>
		<?php foreach ($produk as $prod) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $prod['id_produk'] ?>">
                        <?= $prod["nama_produk"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
</html>