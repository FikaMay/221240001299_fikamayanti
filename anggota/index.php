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
include 'config.php';

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);

echo "<a href='create.php'>Tambah Anggota</a>";
if ($result->num_rows > 0) {
	echo "<table border='1'>";
	echo "<tr><th>Anggota ID</th><th>Nama</th><th>Alamat</th><th>Email</th><th>Telepon</th><th>Action</th></tr>";
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>".$row["anggota_id"]."</td>";
		echo "<td>".$row["nama"]."</td>";
		echo "<td>".$row["alamat"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["telepon"]."</td>";
		echo "<td><a href='update.php?id=".$row["anggota_id"]."'>Edit</a> | <a href='delete.php?id=".$row["anggota_id"]."'>Hapus</a></td>";
		echo "</tr>";
	}
 	echo "</table>";
 	
} else {
	echo "Tidak ada anggota.";
}

$conn->close();
?>

