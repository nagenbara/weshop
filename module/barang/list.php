<div id="frame-tambah">

	<a href="<?php echo BASE_URL. "index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+ Tambah barang</a>

</div>

<?php

	$query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id ORDER BY nama_barang ASC");
	
	if(mysqli_num_rows($query) == 0) {
		echo "<h3>Saat ini belum ada nama barang di dalam tabel barang</h3>";
	}else {
		echo "<table class='table-list'>";
		echo "<tr class='header-table'>
				<th>No</th>
				<th>barang</th>
				<th>kategori</th>
				<th>harga</th>
				<th>Status</th>
				<th>Action</th>
				</tr>";
				
				$no=1;
				
			while($row=mysqli_fetch_assoc($query)){
			
				echo "<tr>
						<td>$no</td>
						<td>$row[nama_barang]</td>
						<td>$row[kategori]</td>
						<td>".rupiah($row["harga"])."</td>
						<td>$row[status]</td>
						<td>
						<a href='".BASE_URL. "index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
						</td>
				</tr>";
			$no++;
			
	}
		}
	echo "</table>";
?>