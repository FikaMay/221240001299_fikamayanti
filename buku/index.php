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


$sql = "SELECT buku.*, kategori.* FROM buku LEFT JOIN kategori ON buku.kategori_id=kategori.kategori_id";
$result = $conn->query($sql);

echo "<a href='create.php' class='add-book-link'>Tambah Buku</a>";
if ($result->num_rows > 0) {
	echo "<table border='1'>";
	echo "<tr><th>Buku ID</th><th>Judul</th><th>Pengarang</th><th>Penerbit</th><th>Tahun Terbit</th><th>Sinopsis</th><th>Nama Kategori</th><th>Action</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["buku_id"]."</td>";
		echo "<td>".$row["judul"]."</td>";
		echo "<td>".$row["pengarang"]."</td>";
		echo "<td>".$row["penerbit"]."</td>";
		echo "<td>".$row["tahun_terbit"]."</td>";
		echo "<td>".$row["sinopsis"]."</td>";
		echo "<td>".$row["nama_kategori"]."</td>";
		echo "<td><a href='update.php?id=".$row["buku_id"]."'>Edit</a> | <a href='delete.php?id=".$row["buku_id"]."'>Hapus</a></td>";
		echo "</tr>";
	}
 	echo "</table>";
} else {
	echo "Tidak ada data buku.";
}

$conn->close();
?>





