<?php
include 'config.php';

// Periksa apakah parameter 'id' diatur dalam query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $sql = "DELETE FROM kategori WHERE kategori_id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: read.php"); // Redirect ke tampilan Read setelah berhasil hapus data 
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>

