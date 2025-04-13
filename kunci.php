<?php
	$kunci = new PDO("mysql:host=localhost;dbname=elibsmk","root","");

	if($kunci){
		echo "Database terhubung";
	}else{
		echo "Periksa koneksi database anda. Pastikan database sudah terimpor/ada di localhost";
	}
?>