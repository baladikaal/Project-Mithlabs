<h2>SETTING BANNER</h2>

<table class="table  table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Foto Banner</th>
			<th>Slogan Besar</th>
			<th>Slogan Kecil</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody> 
		<?php $nomor=1;  ?>
		<?php $ambil = $koneksi->query("SELECT * FROM tbl_banner"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()){  ?>
		<tr>
			<td><?php echo $nomor;  ?></td>
			<td>
				 <!-- "Foto Produk" adalah tempat nama folder foto yang akan di simpan-->
				<img src="../images/<?php echo $pecah['foto_banner'];  ?>" width="250">
			</td>
			<td><?php echo $pecah['slogan1_banner']; ?></td>
			<td><?php echo $pecah['slogan2_banner']; ?></td>
			<td>    
				<a href="index.php?halaman=ubahbanner&id=<?php echo $pecah['id_banner'];  ?>" class="btn btn-warning">ubah</a>
			</td>
		</tr>	
		<?php $nomor++;  ?>
		<?php }  ?>
	</tbody>
</table>