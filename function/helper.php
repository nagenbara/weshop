<?php

	define("BASE_URL", "http://localhost:8080/weshop v2/toko-online-weshop111/");

	$arrayStatuspesanan[0] = "Menunggu Pembayaran";
	$arrayStatuspesanan[1] = "Pembayaran Sedang divalidasi";
	$arrayStatuspesanan[2] = "Lunas";
	$arrayStatuspesanan[3] = "Pembayaran ditolak";



	function rupiah($nilai = 0) {
		$string = "Rp. " .number_format($nilai);
		return $string;
	}

	function kategori($kategori_id = false){
		global $koneksi;
	$string = "<div id='menu-kategori'>";

		$string .= "<ul>";

				$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");

				while($row=mysqli_fetch_assoc($query)){
					if($kategori_id == $row['kategori_id']){
									$string .= "<li><a href='".BASE_URL. "index.php?kategori_id=$row[kategori_id]' class='active'>$row[kategori]</a> </li>";
					} else{
									$string .= "<li><a href='".BASE_URL. "index.php?kategori_id=$row[kategori_id]'>$row[kategori]</a> </li>";

				}
			}

		$string .= "</ul>";

	$string .= "</div>";

	return $string;
	}
