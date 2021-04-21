<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040117");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi untuk menambahkan data kedalam database

function tambah($data) {

    $conn = koneksi();

    $nama_produk = htmlspecialchars($data['nama_produk']);
    $gambar_produk = htmlspecialchars($data['gambar_produk']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "INSERT INTO produk 
                     VALUES
                     ('','$gambar_produk', '$nama_produk',  '$deskripsi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}
