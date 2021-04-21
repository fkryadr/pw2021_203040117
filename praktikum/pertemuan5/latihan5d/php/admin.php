<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$produk = query("SELECT * FROM produk");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $produk  =  query("SELECT * FROM product WHERE
                        nama_produk LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' ");
} else {
    $produk = query("SELECT * FROM produk");
}

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
    
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>


<table border="1" cellpadding="13" cellspacing="0">
    <tr>
    <th>No</th>
    <th>opsi</th>
    <th>Gambar</th>
    <th>Nama Produk</th>
    <th>Deskripsi</th>
    </tr>
    
    <?php if (!empty($produk)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data tidak ditemukan</h1>
        </td>
    </tr>
    <?php endif;?>

    <?php $i = 1; ?>
	<?php foreach ($produk as $prod) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="php/ubah.php?id=<?= $prod['id_produk'] ?>"><button>Ubah</button></a>
            <a href="php/hapus.php?id=<?= $prod['id_produk']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
        <td><img width="100px" src="../latihan5a/assets/img/<?= $prod['gambar_produk']; ?>" alt=""></td>
        <td><?= $prod['nama_produk']; ?></td>
        <td><?= $prod['deskripsi']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>