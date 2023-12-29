<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $kategori_id = $_POST['kategori_id'];
    $nama_kategori = $_POST['nama_kategori'];

// periksa koneksi apakah berhasil, jika tidak akan menampilkan pesan "Koneksi Gagal"
if ($conn) {
    $sql = "UPDATE kategori SET kategori_id = '$kategori_id',nama_kategori = '$nama_kategori' WHERE kategori_id = '$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: read.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

        $conn->close();
} else {
    echo "Koneksi Gagal.";
    }
}

?>

