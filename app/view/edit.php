<?php 
session_start();
require_once('../controller/proses.php');
$kasir = new Beli;
$kasir->edit();

?>
<?php include('main/header.php');?>




<div class="container mt-4">
	<div class="form-controller">
		<form action="" method="post">
			<div class="input-container d-flex gap-2 ">
				<input type="text" class="form-control" value="<?= $dataTerpilih["jenis"];?>" placeholder="Masukan Nama Barang" name="nama">
				<input type="text" class="form-control" value="<?= $dataTerpilih["harga"];?>" placeholder="Masukan Harga Barang" name="harga">
				<input type="text" class="form-control" value="<?= $dataTerpilih["jumlah"];?>" placeholder="Masukan jumlah Barang" name="jumlah">
				</div>
				<div class="btn-collapse mt-2">
				<button type="submit" name="btn" class="btn btn-primary">Ubah</button>
			</form>
		</div>
	</div>
</div>










<?php include('main/footer.php') ;?>