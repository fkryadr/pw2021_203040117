<?php

// memulai sesi

session_start();

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';
    
$id = $_GET['id'];
$produk = query("SELECT * FROM produk WHERE id_produk = $id")[0];


?>

<h3>Form Ubah Data Produk</h3>
<form action="" method="POST">
    <ul>
        <li>
            <input type="hidden" name="id" id="id" value="<?= $produk['id_produk']; ?>">
        </li>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="file" name="img" id="img" ><br><br>
        </li>
        <li>
            <label for="nrp">ID Produk :</label><br>
            <input type="text" name="" id="nrp" required value="<?= $produk['id_produk']; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama Produk :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $produk['nama_produk']; ?>"><br><br>
        </li>
        <li>
            <label for="email">Deskripsi Produk :</label><br>
            <input type="name" name="desc" id="desc" required value="<?= $produk['deskripsi']; ?>"><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php

if (isset($_POST['ubah'])) {
    if (ubah ($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>