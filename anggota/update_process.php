<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $anggota_id = $_POST['anggota_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Check if the connection is established
    if ($conn) {
        $sql = "UPDATE anggota SET anggota_id = '$anggota_id',nama = '$nama', alamat = '$alamat', email = '$email', telepon = '$telepon' WHERE anggota_id = '$id'";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
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

