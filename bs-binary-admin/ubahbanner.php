<h2>UPDATE BANNER</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM tbl_banner WHERE id_banner='$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
  ?>
  <form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="img">Foto</label>
		<input type="file" class="form-control" name="banner" accept="image/*">
	</div>
    <div class="form-group">
		<img src="../images/<?php echo $pecah['foto_banner']; ?>" width="450">
	</div>
    <div class="form-group">
		<label>Slogan Besar</label>
		<input type="text" class="form-control" name="slogan1" value="<?php echo $pecah['slogan1_banner'];  ?>">
	</div>
	<div class="form-group">
		<label>Slogan Kecil</label>
		<input type="text" class="form-control" name="slogan2" value="<?php echo $pecah['slogan2_banner'];  ?>">
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
	$nama = $_FILES['banner']['name'];
	$lokasi = $_FILES['banner']['tmp_name'];

	

	#jika foto diubah
	if (!empty($lokasi)) {
		#untuk "hapus foto" di file
		$fotobanner = $pecah['foto_banner'];
		if(file_exists("../images/$fotobanner")) {
			unlink("../images/$fotobanner");
		}

		move_uploaded_file($lokasi, "../images/".$nama);

		$sql = "UPDATE tbl_banner SET foto_banner='$nama',slogan1_banner='$_POST[slogan1]',slogan2_banner='$_POST[slogan2]' WHERE id_banner='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=banner';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}#jika foto tidakk diubah
	else
	{
		$sql = "UPDATE tbl_banner SET slogan1_banner='$_POST[slogan1]',slogan2_banner='$_POST[slogan2]' WHERE id_banner='$_GET[id]'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
			echo "<script>alert('Data berhasil di ubah!');</script>";
			echo "<script>location='index.php?halaman=banner';</script>"; 
		} else {
			echo "Error updating record: " . $conn->error;
		}

	}
	
}
?>