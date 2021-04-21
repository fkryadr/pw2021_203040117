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

</style>

<div class="add">
    <a href="php/tambah.php"><button>Tambah Data</button></a>
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
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
        </td>
        <td><img width="100px" src="../latihan5a/assets/img/<?= $prod['gambar_produk']; ?>" alt=""></td>
        <td><?= $prod['nama_produk']; ?></td>
        <td><?= $prod['deskripsi']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>