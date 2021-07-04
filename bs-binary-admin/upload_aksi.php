<?php 
$koneksi = new mysqli("localhost","root","","db_myweb");
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['fileproduk']['name']) ;
move_uploaded_file($_FILES['fileproduk']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['fileproduk']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileproduk']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// untuk membuat nama baru file image
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama   = $data->val($i, 1);
	$desk   = $data->val($i, 2);
    $label  = $data->val($i, 3);
	$foto1  = $data->val($i, 4);
	$foto2  = $data->val($i, 5);
    $shoppe = $data->val($i, 6);
	$zalora = $data->val($i, 7);
	$blibli = $data->val($i, 8);

	if($nama != "" && $desk != ""
    && $label != "" && $foto1 != "" && $foto2 != "" && $shoppe != ""
    && $zalora != "" && $blibli != ""){

		$img1 = $foto1;
		$img2 = $foto2;

		$nameNew1 = substr(str_shuffle($permitted_chars), 0, 16).'.jpg';
		$nameNew2 = substr(str_shuffle($permitted_chars), 0, 16).'.jpg';

		$destinationFilePath1 = "../Foto Produk/".$nameNew1;
		$destinationFilePath2 = "../Foto Produk/".$nameNew2;

		if( !copy($img1, $destinationFilePath1) ) {  
			// echo "Done ";  
		}
		else {  
			// echo "File has been moved!";  
		}

		if( !copy($img2, $destinationFilePath2) ) {  
			// echo "Berhasil";  
		}else {  
			// echo "File has been moved!";  
		}


		// input data ke database (table data_pegawai)
        $sql = "INSERT INTO tbl_produk(nama_produk, 
			desc_produk, label_produk, foto1_produk, foto2_produk, link_shoppe, 
			link_zalora, link_blibli)
            values('$nama','$desk','$label','$nameNew1','$nameNew2','$shoppe','$zalora','$blibli')";
                

		mysqli_query($koneksi,$sql);
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileproduk']['name']);
echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk' >";


?>