<?php

include 'koneksi.php';

// Sample query to get counts from each table
$query_buku = "SELECT COUNT(*) AS total_buku FROM buku";
$query_kategori = "SELECT COUNT(*) AS total_kategori FROM kategori";
$query_peminjaman = "SELECT COUNT(*) AS total_peminjaman FROM peminjaman";
$query_members = "SELECT COUNT(*) AS total_members FROM anggota";

$result_buku = $conn->query($query_buku);
$result_kategori = $conn->query($query_kategori);
$result_peminjaman = $conn->query($query_peminjaman);
$result_members = $conn->query($query_members);

// Fetch counts
$row_buku = $result_buku->fetch_assoc();
$row_kategori = $result_kategori->fetch_assoc();
$row_peminjaman = $result_peminjaman->fetch_assoc();
$row_members = $result_members->fetch_assoc();


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
            padding: 10px;
            margin: 20px;
        }

        div {
            width: 10%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0; /* Add margin: 0; to remove default margin on ul */
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<h1>Dashboard</h1>

<div>
    <ul>
        <li>Total Buku: <?php echo $row_buku['total_buku']; ?></li>
    </ul>
</div>

<div>
    <ul>
        <li>Total Kategori: <?php echo $row_kategori['total_kategori']; ?></li>
    </ul>
</div>

<div>
    <ul>
        <li>Total Peminjam: <?php echo $row_peminjaman['total_peminjaman']; ?></li>
    </ul>
</div>

<div>
    <ul>
        <li>Total Members: <?php echo $row_members['total_members']; ?></li>
    </ul>
</div>

</body>
</html>
