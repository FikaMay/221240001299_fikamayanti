<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$kategori_id = $_POST['kategori_id'];
	$nama_kategori = $_POST['nama_kategori'];

	$sql = "INSERT INTO kategori ( kategori_id, nama_kategori) VALUES ('$kategori_id','$nama_kategori')";

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
	Kategori ID: <input type="text" name="kategori_id"><br>
	Nama Kategori: <input type="text" name="nama_kategori"><br>
	<input type="submit" value="Tambah">
</form>

