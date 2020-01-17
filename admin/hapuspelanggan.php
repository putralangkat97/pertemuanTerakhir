<?php 
include 'koneksi.php';
	
	$cek = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$_GET[id]'");
	$pecah = $cek->fetch_assoc();

	echo "<pre>";
	print_r($pecah);
	echo "</pre>";
 // menangkap id yang terkirim dari URL


 // menghapus data dari dataabse
 $sql = "DELETE FROM pelanggan WHERE id_pelanggan = '$_GET[id];' ";
 $query = mysqli_query($koneksi, $sql);

 if ($query) {
	echo "<script>alert('Data berhasil di hapus');
		 document.location.href='index.php?halaman=pelanggan';</script>"; 

 }else{
 	echo "<script>alert('Data gagal di hapus');
		 document.location.href='index.php?halaman=pelanggan';</script>";
 }

 ?>