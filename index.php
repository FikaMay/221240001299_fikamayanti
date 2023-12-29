<?php

include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h2 {
        color: #333;
        text-align: left;
        padding: 10px;
        margin: 10px;
    }

    nav {
        background-color: #8B4513;
        overflow: hidden;
    }

    nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    nav a:hover {
        background-color: #ddd;
        color: black;
    }

    
    nav a:last-child {
        float: right;
    }

    nav a:last-child:hover {
        background-color:   #8B4513; 
    }
</style>
</head>
<body>
<h2>Selamat Datang di Aplikasi Perpustakaan</h2>
<nav>
    <a href="index.php">Beranda</a>
    <a href="buku/index.php">Daftar Buku</a>
    <a href="anggota/index.php">Daftar Anggota</a>
    <a href="peminjaman/index.php">Peminjaman</a>
    <a href="kategori/index.php">Kategori</a>
    <a href="logout.php">Log Out</a>
</nav>

<?php
include 'dashbord.php';
?>


</body>
</html>
