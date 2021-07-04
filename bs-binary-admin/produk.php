<h2>DATA PRODUK</h2>
<br>
<a href="index.php?halaman=addproduk" class="btn btn-primary">Tambah Produk</a>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
	Upload Data Excel Produk (.Xls)
</button>
<br>
<table class="table  table-bordered">
	<br>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>label</th>
			<th>Foto 1</th>
			<th>Foto 2</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody> 
		<?php $nomor=1;  ?>
		<?php $ambil = $koneksi->query("SELECT * FROM tbl_produk"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()){  ?>
		<tr>
			<td><?php echo $nomor;  ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['label_produk']; ?> Produk</td>
			<td>
				 <!-- "Foto Produk" adalah tempat nama folder foto yang akan di simpan-->
				<img src="../Foto Produk/<?php echo $pecah['foto1_produk'];  ?>" width="100">
			</td>
			<td>
				 <!-- "Foto Produk" adalah tempat nama folder foto yang akan di simpan-->
				<img src="../Foto Produk/<?php echo $pecah['foto2_produk'];  ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];  ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=ubahdataproduk&id=<?php echo $pecah['id_produk'];  ?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>	
		<?php $nomor++;  ?>
		<?php }  ?>
	</tbody>
</table>

<!-- untuk pop modal upload -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><h2>Upload Produk Excel</h2></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
					<div class="form-group">
						<label >Format Upload (.xls):</label>
						<br>
						<label>| 1.Nama | 2.Harga | 3.Deskripsi | 4.Label | | 5.link shoppe | 6.link zalora | 7.link blibli |</label>
						<img src="assets/img/Capture.JPG" alt="Image Format Excel" width="100%" height="100%"/>
						<br>
						<br>
						<h6 class="text-danger">note : Hanya untuk tampilan PC/Desktop</h6>
						<br>
						<input required="required" type="file" id="fileUpload" class="form-control" name="fileproduk" accept=".xls">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<input class="btn btn-primary" name="upload" type="submit" value="Import Data">
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

