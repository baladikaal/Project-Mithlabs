<h2>UPDATE DATA PRODUK</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM tbl_produk WHERE id_produk='$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
  ?>
  <form method="post" enctype="multipart/form-data">
  <div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_produk'];  ?>">
	</div>
	
	<div class="form-group" aria-label="Default select example">
		<label>Label</label>
		<select class="form-control" name="label">
			<option selected><?php echo $pecah['label_produk'];  ?></option>
			<option>Normal</option>
			<option>Trend</option>
            <option>New</option>
			<option>Jangan Tampilkan</option>
		</select>
	</div>

	<div class="form-group"> 
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['desc_produk'];  ?></textarea>
	</div>
	<div class="form-group">
		<img src="../Foto Produk/<?php echo $pecah['foto1_produk']; ?>" width="200">
	</div>
	<div class="form-group">
		<label for="img">Foto 1</label>
		<input type="file" class="form-control" name="foto1" accept="image/*">
	</div>
	<div class="form-group">
		<img src="../Foto Produk/<?php echo $pecah['foto2_produk']; ?>" width="200">
	</div>
	<div class="form-group">
		<label for="img">Foto 2</label>
		<input type="file" class="form-control" name="foto2" accept="image/*">
	</div>
	<div class="form-group">
		<label>Link Shoppe</label>
		<input type="text" class="form-control" name="shoppe" value="<?php echo $pecah['link_shoppe'];  ?>">
	</div>
	<div class="form-group">
		<label>Link Zalora</label>
		<input type="text" class="form-control" name="zalora" value="<?php echo $pecah['link_zalora'];  ?>">
	</div>
	<div class="form-group">
		<label>Link BliBli</label>
		<input type="text" class="form-control" name="blibli" value="<?php echo $pecah['link_blibli'];  ?>">
	</div>

	<button class="btn btn-primary" name="ubah">Update</button>
  	</div>
  </form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_myweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['ubah'])) {
	$nama1 = $_FILES['foto1']['name'];
	$lokasi1 = $_FILES['foto1']['tmp_name'];
	$nama2 = $_FILES['foto2']['name'];
	$lokasi2 = $_FILES['foto2']['tmp_name'];

	// jika semua foto di ubah
	if (!empty($lokasi1) AND !empty($lokasi2)) {

		$fotoproduk1 = $pecah['foto1_produk'];
		$fotoproduk2 = $pecah['foto2_produk'];
		unlink("../Foto Produk/$fotoproduk1");
		unlink("../Foto Produk/$fotoproduk2");

		move_uploaded_file($lokasi1, "../Foto Produk/".$nama1);
		move_uploaded_file($lokasi2, "../Foto Produk/".$nama2);

		$sql = "UPDATE tbl_produk SET nama_produk='$_POST[nama]',label_produk='$_POST[label]'
		,desc_produk='$_POST[deskripsi]',foto1_produk='$nama1',foto2_produk='$nama2',link_shoppe='$_POST[shoppe]'
		,link_zalora='$_POST[zalora]',link_blibli='$_POST[blibli]' WHERE id_produk='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=produk';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}#jika foto1 diubah
	else if (!empty($lokasi1)) {

		$fotoproduk1 = $pecah['foto1_produk'];
		unlink("../Foto Produk/$fotoproduk1");

		move_uploaded_file($lokasi1, "../Foto Produk/".$nama1);

		$sql = "UPDATE tbl_produk SET nama_produk='$_POST[nama]',label_produk='$_POST[label]'
		,desc_produk='$_POST[deskripsi]',foto1_produk='$nama1',link_shoppe='$_POST[shoppe]'
		,link_zalora='$_POST[zalora]',link_blibli='$_POST[blibli]' WHERE id_produk='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=produk';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}#jika foto2 diubah
	else if (!empty($lokasi2)) {

		$fotoproduk2 = $pecah['foto2_produk'];
		unlink("../Foto Produk/$fotoproduk2");

		move_uploaded_file($lokasi2, "../Foto Produk/".$nama2);

		$sql = "UPDATE tbl_produk SET nama_produk='$_POST[nama]',label_produk='$_POST[label]'
		,desc_produk='$_POST[deskripsi]',foto2_produk='$nama2',link_shoppe='$_POST[shoppe]'
		,link_zalora='$_POST[zalora]',link_blibli='$_POST[blibli]' WHERE id_produk='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=produk';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}#jika foto tidakk diubah
	else
	{
		$sql = "UPDATE tbl_produk SET nama_produk='$_POST[nama]',label_produk='$_POST[label]'
		,desc_produk='$_POST[deskripsi]',link_shoppe='$_POST[shoppe]'
		,link_zalora='$_POST[zalora]',link_blibli='$_POST[blibli]' WHERE id_produk='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=produk';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}
	
}
?>