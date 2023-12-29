<?php
include 'config.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM anggota WHERE anggota_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
?>
	<form action="index.php" method="POST">
		Anggota ID: <input type="text" name="anggota_id" value="<?php echo $row['anggota_id']; ?>"><br>
		Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
		Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
		Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
		Telepon: <input type="text" name="telepon" value="<?php echo $row['telepon']; ?>"><br>
		<input type="hidden" name="id" value="<?php echo $row['anggota_id']; ?>">
		<input type="submit" value="Update">
	</form>
<?php
} else {
	echo "Data tidak ditemukan.";
}

$conn->close();

?>



