<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peminjaman_id = $_POST['peminjaman_id'];
    $buku_id = $_POST['buku_id'];
    $anggota_id = $_POST['anggota_id'];
    $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $status = $_POST['status'];


$sql = "INSERT INTO peminjaman (peminjaman_id, buku_id, anggota_id, tanggal_peminjaman, tanggal_pengembalian, status)
        VALUES ('$peminjaman_id','$buku_id', '$anggota_id', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirect ke tampilan Read setelah berhasil tambah data
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    $conn->close();
}

?>
<form action="create.php" method="POST">
    Peminjaman ID: <input type="text" name="peminjaman_id"><br>
    Buku ID: <input type="text" name="buku_id"><br>
    Anggota ID: <input type="text" name="anggota_id"><br>
    Tanggal Peminjaman: <input type="date" name="tanggal_peminjaman"><br>
    Tanggal Pengembalian: <input type="date" name="tanggal_pengembalian"><br>
    Status:
    <select name="status">
        <option value="dipinjam">Dipinjam</option>
        <option value="kembali">Kembali</option>
    </select><br>
    <input type="submit" value="Tambah">
</form>


