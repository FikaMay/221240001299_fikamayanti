<?php
include 'koneksi.php';

$result = $conn->query("SELECT kategori_id, nama_kategori FROM kategori");
$categories = [];
while ($row = $result->fetch_assoc()) {
    $categories[$row['kategori_id']] = $row['nama_kategori'];
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM buku WHERE buku_id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
?>


	<form action="update_process.php" method="POST">
		Buku ID: <input type="text" name="buku_id" value="<?php echo $row['buku_id']; ?>"><br>
		Judul: <input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
		Pengarang: <input type="text" name="pengarang" value="<?php echo $row['pengarang'];?>"><br>
		Penerbit: <input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>"><br>
		Tahun Terbit: <input type="text" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>"><br>
		Sinopsis: <input type="text" name="sinopsis" value="<?php echo $row['sinopsis']; ?>"><br>
		Kategori ID: <select name="kategori_id">
        <?php foreach ($categories as $id => $name) : ?>
            <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
        <?php endforeach; ?>
    </select><br>
		<input type="hidden" name="id" value="<?php echo $row['buku_id']; ?>">
		<input type="submit" value="Update">
	</form>
<?php

} else {
	echo "Data tidak ditemukan.";
}

$conn->close();

?>



