<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$produk = query("SELECT * FROM produk");

?>

<style>

.add button {

    background-color: black;
    color: white;
}

.logout a {
    background-color: black;
    color: white;
    text-align: left;
}

</style>

<div class="add">
    <a href="php/tambah.php"><button>Tambah Data</button></a>
</div>

<div class="logout">
    <a href="logout.php">Logout</a>
</div>

<table border="1" cellpadding="13" cellspacing="0">
    <tr>
    <th>No</th>
    <th>opsi</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>Deskripsi</th>
    </tr>

    <?php $i = 1; ?>
	<?php foreach ($produk as $prod) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="php/ubah.php?id=<?= $prod['id_produk'] ?>"><button>Ubah</button></a>
            <a href="php/hapus.php?id=<?= $prod['id_produk']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img width="100px" src="../latihan6a/assets/img/<?= $prod['gambar_produk']; ?>" alt=""></td>
        <td><?= $prod['nama_produk']; ?></td>
        <td><?= $prod['deskripsi']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>