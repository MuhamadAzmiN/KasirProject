<?php 
session_start();


?>
<?php include('main/header.php');?>



<div class="container p-10">
	<h1 style="text-align: center;">Bukti Pembayaran</h1>
	<hr>
	<?php foreach($_SESSION["dataSiswa"] as $data) :?>
		<h4 style="text-align: center;"><?= $data["jenis"] ;?> <?php echo number_format($data["harga"], 0, '.', '.' );	 echo "x". $data["jumlah"];?></h4>
		<hr>
		<?php endforeach ;?>
		<h4 style="text-align: center;">Uang Yang harus dibayarkan <?= number_format($_SESSION["totalHarga"], 0 , '.', '.');?></h4>
	<p style="text-align: center;">Kembalian <?= number_format($_SESSION["kembalian"], 0, '.', '.');?></p>
	<center>
		<a style="text-align: center;" href="hapusAll.php">Back To home</a>
	</center>

</div>

<?php 

if($_SESSION["dataSiswa"] == null || $_SESSION["totalHarga"] == null){
	header("Location: index.php");
	exit;
}
?>




<?php include('main/footer.php') ;?>