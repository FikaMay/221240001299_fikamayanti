<!DOCTYPE html>
<html>
<head>
</head>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 20px;
  }

  a {
    color: #3498db;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
  }

  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #8B4513;
    color: #fff;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  td a {
    margin-right: 10px;
  }

  .add-book-link {
    display: block;
    margin-bottom: 20px;
  }
</style>
<body>

</body>
</html>
<?php
include 'koneksi.php';

$sql = "SELECT peminjaman.peminjaman_id, buku.judul, anggota.nama, peminjaman.tanggal_peminjaman, peminjaman.tanggal_pengembalian, peminjaman.status FROM `peminjaman` INNER JOIN `buku` ON peminjaman.buku_id=buku.buku_id INNER JOIN `anggota` ON peminjaman.anggota_id=anggota.anggota_id";
$result = $conn->query($sql);

echo "<a href='create.php'>Tambah peminjaman</a>";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Peminjaman ID</th><th>Judul Buku</th><th>Nama Anggota </th><th>Tanggal Peminjaman</th><th>Tanggal Pengembalian</th><th>Status</th><th>Action</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["peminjaman_id"]."</td>";
        echo "<td>".$row["judul"]."</td>";
        echo "<td>".$row["nama"]."</td>";
        echo "<td>".$row["tanggal_peminjaman"]."</td>";
        echo "<td>".$row["tanggal_pengembalian"]."</td>";
        echo "<td>".$row["status"]."</td>";
        echo "<td><a href='update.php?id=".$row["peminjaman_id"]."'>Edit</a> | <a href='delete.php?id=".$row["peminjaman_id"]."'>Hapus</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data peminjaman.";
}

$conn->close();
?>


