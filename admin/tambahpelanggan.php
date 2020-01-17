<h2>Tambah Data Pelanggan</h2>
<hr>
<form method="POST">
	<div class="form-group">
		<label>Email Pelanggan</label>
		<input type="email" name="email_pelanggan" class="form-control">
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password_pelanggan" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Pelanggan</label>
		<input type="text" name="nama_pelanggan" class="form-control">
	</div>
	<div class="form-group">
		<label>Nomor Telepon</label>
		<input type="text" name="nomor_telepon" class="form-control">
	</div>
	<button name="tambah" class="btn btn-primary">Tambah</button>
</form>

<?php 
if (isset($_POST['tambah'])) {

$nama_pelanggan 			= $_POST['nama_pelanggan'];
$email_pelanggan 			= $_POST['email_pelanggan'];
$password_pelanggan 		= $_POST['password_pelanggan'];
$nomor_telepon 				= $_POST['nomor_telepon'];
	
$sql = $koneksi->query("INSERT INTO pelanggan (email_pelanggan, password_pelanggan, nama_pelanggan, nomor_telepon) VALUES('$email_pelanggan','$password_pelanggan', '$nama_pelanggan', '$nomor_telepon' ) ");
	if ($sql) {
	echo "
		<script>
		alert('Data berhasil ditambah!');
		document.location.href='index.php?halaman=pelanggan';
		</script>";	
} 
else{
	echo "
		<script>
		alert('Data gagal ditambah!');
		document.location.href='index.php?halaman=pelanggan';
		</script>";
	}

} 

?>

