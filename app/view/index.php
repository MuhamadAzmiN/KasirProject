<?php 
require_once('../controller/proses.php');
require_once('../model/dataHarga.php');

$total = 0;
$_SESSION["totalHarga"] = 0;

?>
<?php include('main/header.php');?>
    <div class="container mt-4">
		<div class="form-container">
			<h3 class="text-center">Masukan Data barang</h3>
				<form action="" method="post">
						<div class="input-container d-flex gap-2 ">
						<input type="text" class="form-control" placeholder="Masukan Nama Barang" name="nama">
						<input type="text" class="form-control" placeholder="Masukan Harga Barang" name="harga">
						<input type="text" class="form-control" placeholder="Masukan jumlah Barang" name="jumlah">
					</div>
					<div class="btn-collapse mt-2">
						<button type="submit" name="btn" class="btn btn-primary">Tambah</button>
						<?php if(empty($_SESSION["dataSiswa"])):?>
							
						<?php else :?>
							<a href="hapusAll.php" name="btn" class="btn btn-danger">Hapus Semua data</a>

						<?php endif;?>

					</div>
					
				</form>
			</div>
			<hr>
			<p>List Barang</p>
			<table class="table table-bordered table-stripped-coloum">
				<thead>
					<tr class="table-container" style="text-align: center;">
						<th scope="col">No</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Total Barang</th>
						<th>Action</th>
					</tr>
					<?php $i = 1;?>
					<?php if(isset($_SESSION["dataSiswa"]) && !empty($_SESSION["dataSiswa"])):?>
					<?php foreach($_SESSION["dataSiswa"] as $id => $data) :?>
					<tr class="table-container" style="text-align: center;">
						<td><?= $i++;?></td>
						<td><?= $data["jenis"];?></td>
						<td><?= $data["harga"];?></td>
						<td><?= $data["jumlah"];?></td>
						<td>
						<a href="hapus.php?id=<?= $id ;?>"  class="btn btn-danger">Hapus</a>
						<a href="edit.php?id=<?= $id ;?>"  class="btn btn-primary">Edit</a>

						</td>
						<?php
						$total += $data["total"];
						
						 $_SESSION["totalHarga"] = $total;
						?>
					</tr>
					<?php endforeach ;?>
					<?php endif;?>
					<tr class="table-container" style="text-align: center;">
						<th scope="col">Total</th>
						<th>Rp <?= number_format($total, 0, '.', '.'  );?>
						</th>
						<th>
							<a href="bayar.php"  class="btn btn-primary">Bayar</a>
						</th>
						</tr>
					</thead>
			</table>
		</div>
<?php include('main/footer.php');?>