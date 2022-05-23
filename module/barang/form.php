<?php
	
	$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;
	$spesifikasi = "";
	$stok = "";
	$harga = "";
	$nama_barang = "";
	$status = "";
	$button = "Add";

	// if($barang_id){
		// $querybarang = mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
		// $row = mysqli_fetch_assoc($querybarang);
		
	// $barang = $row['barang'];
	// $status = $row['status'];
	// $button = "Update";
	// }

?>

<form action="<?php echo BASE_URL. "module/barang/action.php?barang_id=$barang_id";?>"method="POST" enctype="multipart/form-data">		

	
	<div class="element-form">
			<label>Kategori</label>
			<span>
			
				<select name="kategori_id">
				
					<?php
					
						$query = mysqli_query($koneksi, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
						while($row=mysqli_fetch_assoc($query)){
							echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
						}
					?>
				</select>
			</span>
	</div>	
	
	
	<div class="element-form">
			<label>Nama Barang</label>
			<span><input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>"/></span>
	</div>	
	
	<div class="element-form">
			<label>spesifikasi</label>
			<span><textarea name="spesifikasi"><?php echo $spesifikasi; ?></textarea></span>
	</div>	
	
	<div class="element-form">
			<label>Stok</label>
			<span><input type="text" name="stok" value="<?php echo $stok; ?>"/></span>
	</div>	
	
	<div class="element-form">
			<label>Harga</label>
			<span>
				<input type="text" name="harga" value="<?php echo $harga; ?>"/>
			</span>
	</div>	
	
	<div class="element-form">
			<label>Gambar Produk</label>
			<span><input type="file" name="file"/></span>
	</div>	
	
	
	
	<div class="element-form">
			<label>Status</label>
				<span>	
					<input type="radio" name="status" value="on"<?php if($status=="on"){echo "checked='true'";}?>/> On 
					<input type="radio" name="status" value="off" <?php if($status=="off"){echo "checked='true'";}?>/> Off 
				</span>
	</div>
	
	
	
	<div class="element-form">
		
			<span><input type="submit" name="button" value="<?php echo $button; ?>"/></span>
	</div>	
	
	




</form>