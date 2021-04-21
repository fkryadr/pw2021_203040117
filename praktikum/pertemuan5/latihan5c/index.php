<?php
    include 'php/admin.php';
    $produk = query("SELECT * FROM produk")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5C</title>
</head>
<body>
	<?php foreach ($produk as $prod) : ?>
        </p>
    <?php endforeach; ?>
</body>
</html>