<?php
	
	
	if($user_id){
		header("location:". BASE_URL);
	}


?>



<div id="container-user-akses">

	<form action="<?php echo BASE_URL. "proses_register.php"; ?>" method="POST">
	
		<?php
	
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
			$email = isset($_GET['email']) ? $_GET['email'] : false;
			$phone = isset($_GET['phone']) ? $_GET['phone'] : false;
			$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
			
			if($notif == "require"){
			echo "<div class='notif'>Maaf, Semua data harus dilengkapi</div>";
			}
			else if ($notif == "password"){
			echo "<div class='notif'>Maaf, Password yang kamu masukkan tidak sama</div>";
			}
			else if ($notif == "email"){
			echo "<div class='notif'>Maaf, Email sudah pernah digunakan</div>";
			}
			else if ($notif == "success"){
			echo "<div class='success'>Akun Berhasil Dibuat!</div>";
			}
		?>
	
		<div class="element-form">
			<label>Nama Lengkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>" /></span>
		</div>
		
		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>"/></span>
		</div>
		
		<div class="element-form">
			<label>Nomor Telepon</label>
			<span><input type="text" name="phone" value="<?php echo $phone; ?>"/></span>
		</div>
		
		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
		</div>
		
		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password"/></span>
		</div>
		
		<div class="element-form">
			<label>Konfirmasi Password</label>
			<span><input type="password" name="konfirmasi_password"/></span>
		</div>
		
		<div class="element-form">
			<span><input type="submit" value="Register"/></span>
		</div>
		
	</form>
	
</div>