<?php
session_start();
$kasir = new Beli;
if(isset($_POST["btn"])){
	$kasir->jumlahProduk = $_POST["jumlah"];
	$kasir->jenis = $_POST["nama"];
	$harga = $kasir->harga = $_POST["harga"];
	$_SESSION["dataSiswa"][] = [
		"jumlah" => $kasir->jumlahProduk,
		"jenis" => $kasir->jenis,
		"total" => $kasir->hargaBeli(),
		"harga" => $kasir->harga = $_POST["harga"]
	];
}

