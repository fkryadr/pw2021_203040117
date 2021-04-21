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

    $nama_produk = htmlspecialchars($data['nama_poduk']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $gambar_produk = htmlspecialchars($data['gambar_produk']);

    $query = "INSERT INTO produk 
                     VALUES
                     ('', '$gambar_produk', '$nama_produk', '$deskripsi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    
}

//  Fungsi untuk menghapus data dari table

function hapus($id) {

    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id");

    return mysqli_affected_rows($conn);
}