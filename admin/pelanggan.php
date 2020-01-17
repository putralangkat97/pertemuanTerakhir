<h2>Halaman Pelanggan</h2>

<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Pelanggan</th>
			<th>Email </th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($a = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor++ ?></td>
				<td><?php echo $a['nama_pelanggan']; ?></td>
				<td><?php echo $a['email_pelanggan']; ?></td>
				<td><?php echo $a['nomor_telepon']; ?></td>
				<td>
					<a href="" class="btn btn-info">Edit</a>
					<a href="index.php?halaman=hapuspelanggan&id=<?php echo $a['id_pelanggan']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpelanggan" class="btn btn-success">Tambah Pelanggan</a>