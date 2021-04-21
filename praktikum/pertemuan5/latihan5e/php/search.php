<?php 
// Menghubungkan dengan file php lainnya

require 'functions.phps';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $produk  =  query("SELECT * FROM product WHERE
                        nama_produk LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' ");
} else {
    $produk = query("SELECT * FROM produk");
}
?>