<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $peminjaman_id = $_POST['peminjaman_id'];
    $buku_id = $_POST['buku_id'];
    $anggota_id = $_POST['anggota_id'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $status = $_POST['status'];

// periksa koneksi apakah berhasil, jika tidak akan menampilkan pesan "Koneksi Gagal"
if ($conn) {
    $sql = "UPDATE peminjaman SET peminjaman_id = '$peminjaman_id',buku_id = '$buku_id', anggota_id = '$anggota_id', tanggal_peminjaman = '$tanggal_peminjaman', tanggal_pengembalian = '$tanggal_pengembalian', status = '$status' WHERE peminjaman_id = '$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: read.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
} else {
    echo "Connection failed.";
    }
}

?>

