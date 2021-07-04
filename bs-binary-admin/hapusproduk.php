<?php
$ambil = $koneksi->query("SELECT * FROM tbl_produk WHERE id_produk='$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
#<!-- Foto Produk adalah tempat nama folder foto yang akan di simpan-->

#untuk "hapus foto" di file
$fotoproduk1 = $pecah['foto1_produk'];
$fotoproduk2 = $pecah['foto2_produk'];
if (file_exists("../Foto Produk/$fotoproduk1") AND file_exists("../Foto Produk/$fotoproduk2")) {
	unlink("../Foto Produk/$fotoproduk1");
	unlink("../Foto Produk/$fotoproduk2");
}else if (file_exists("../Foto Produk/$fotoproduk1")) {
	unlink("../Foto Produk/$fotoproduk1");
}else if (file_exists("../Foto Produk/$fotoproduk2")) {
	unlink("../Foto Produk/$fotoproduk2");
}


#Untuk hapus "data file"
$koneksi->query("DELETE FROM tbl_produk WHERE id_produk='$_GET[id]'");

echo "<script>alert('Produk berhasil di Hapus!');</script>";
echo "<script>location='index.php?halaman=produk';</script>"; 
?>