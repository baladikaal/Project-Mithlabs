<h2>TAMBAH PRODUK</h2>
<form  method="post" enctype="multipart/form-data">
    <div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group" aria-label="Default select example">
		<label>Label</label>
		<select class="form-control" name="label">
			<option>Normal</option>
			<option>Trend</option>
            <option>New</option>
			<option>Jangan Tampilkan</option>
		</select>
	</div>
	<div class="form-group"> 
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label for="img">Foto 1</label>
		<input type="file" id="fileUpload" class="form-control" name="foto1" accept="image/*">
	</div>
	<div class="form-group">
		<label for="img">Foto 2</label>
		<input type="file" id="fileUpload" class="form-control" name="foto2" accept="image/*">
	</div>
	<div class="form-group">
		<label>Link Shoppe</label>
		<input type="text" class="form-control" name="shoppe">
	</div>
	<div class="form-group">
		<label>Link Zalora</label>
		<input type="text" class="form-control" name="zalora">
	</div>
	<div class="form-group">
		<label>Link BliBli</label>
		<input type="text" class="form-control" name="blibli">
	</div>
    <button class="btn btn-primary" name="add">Simpan</button>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_myweb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['add'])) 
{
	$nama1 = $_FILES['foto1']['name'];
	$lokasi1 = $_FILES['foto1']['tmp_name'];
	$nama2 = $_FILES['foto2']['name'];
	$lokasi2 = $_FILES['foto2']['tmp_name'];
	move_uploaded_file($lokasi1, "../Foto Produk/".$nama1);
	move_uploaded_file($lokasi2, "../Foto Produk/".$nama2);
	$sql = "INSERT INTO tbl_produk(nama_produk,  
			desc_produk, label_produk, foto1_produk, foto2_produk, link_shoppe, 
			link_zalora, link_blibli)
				values ('$_POST[nama]','$_POST[deskripsi]','$_POST[label]','$nama1','$nama2','$_POST[shoppe]','$_POST[zalora]','$_POST[blibli]')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Produk berhasil di ditambah!');</script>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk' >";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>
