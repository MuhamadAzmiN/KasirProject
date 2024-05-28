<?php
session_start(); 
require_once('../controller/proses.php');
$kasir = new Beli;
$kasir->bayar();


?>
<?php include('main/header.php');?>
<div class="container mt-4">
	<?= $input; ?>  <!-- Display $input here -->
	<div class="form-controller" style="display: block;">
		<form action="" method="post">
			<div class="input-container d-flex gap-2">
				<input type="number" class="form-control" value="" placeholder="Bayar" name="bayar">
				<button type="submit" name="btn" class="btn btn-primary">Ubah</button>
			</div>
		</form>
	</div>
</div>
<?php include('main/footer.php');?>
