<?php 

session_start();
include 'koneksi.php';


//memasukkan $_SESSION

if (!isset($_SESSION['pelanggan'])) {
	echo "<script>alert('Anda harus login terlebih dahulu');</script>";
	echo "<script>document.location.href='login.php';</script>";
}

?>
 </pre>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Keranjang</title>
 	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
 </head>
 <body>
 <?php  

	//echo "<pre>";
	//print_r($_SESSION['keranjang']);
	//echo "</pre>";

 ?>
 	<nav class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<li><a href="checkout.php">Checkout</a></li>
				<?php if ($_SESSION['pelanggan']):
				 ?>
				<li><a href="logout.php">Logout</a></li>
				<?php else: ?>
				<li><a href="login.php">Login</a></li>
				<?php endif ?>
				
			</ul>
		</div>
	</nav>
<div class="container">
 <table class="table table-bordered">

 	<thead>
 		<tr>
 			<th>Nama Menu</th>
 			<th>Gambar</th>
 			<th>Harga</th>
 			<th>Jumlah</th>
 			<th>Subtotal</th>
  		</tr>
 	</thead>
 	<tbody>
 <?php $totalharga = 0; ?>
 <?php foreach($_SESSION['keranjang'] as $id_menu => $jumlah): ?>
 <?php $ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$id_menu' ");?>

<?php  
$m = $ambil->fetch_assoc();
$subtotal = $m['harga_menu']*$jumlah;


?>
 		<tr>			
 			<td><?php echo $m['nama_menu']; ?></td>
 			<td>
 				<img src="foto_menu/<?php echo $m['foto_menu']; ?>" width=100;>
 			</td>
 			<td>Rp.<?php echo number_format($m['harga_menu']); ?></td>
 			<td><?php echo $jumlah; ?></td>
 			<td>Rp.<?php echo number_format($subtotal); ?></td>
 		</tr>
 		<?php $totalharga+=$subtotal ?>
 		<?php endforeach ?>
 	</tbody>
 	<tfoot>
 		<tr>
 			<td colspan="4">
 				<b>Total</b>
 			</td>
 			<td><b>Rp.<?php echo number_format($totalharga); ?></b></td>
 		</tr>
 	</tfoot>
 </table>
 
 <form method="post">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama_pelanggan'] ?>" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nomor_telepon'] ?>" class="form-control">
			</div>
		</div>
	</div>
 </form>

 <a href="checkout.php" class="btn btn-default btn-sm">Pesan</a>
</div>
</body>
</html>