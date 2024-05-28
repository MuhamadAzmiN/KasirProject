<?php 
class Kasir {
	public $jenis = "baju",
		   $jumlahProduk;
	public $harga;


	public function getHarga($harga)
	{
		$this->harga = $harga;
	}
}

$dataTerpilih = null;
$input = ''; 
class Beli extends Kasir {
	public function hargaBeli()
	{
		$harga = $this->harga * $this->jumlahProduk;
		return $harga;

	}

	public function edit()
	{
		global $dataTerpilih;
		if(isset($_GET["id"])){
			$id = $_GET["id"];
		
		
			$dataTerpilih = null;
			foreach($_SESSION["dataSiswa"] as $key => $data){
				if($id == $key){
					$dataTerpilih = $data;
				}
			}
			
			
			
		}
		
		
		if(isset($_POST["btn"])){
			foreach($_SESSION["dataSiswa"] as $key => $data){
				if($id == $key){
					$_SESSION["dataSiswa"][$key]["jenis"] = $_POST["nama"];
					$_SESSION["dataSiswa"][$key]["jumlah"] = $_POST["jumlah"];
					$_SESSION["dataSiswa"][$key]["harga"] = $_POST["harga"];
					break;
				}
			}
		
		
			header("Location: index.php");
			exit;
		
			
			
		}
		
	}

	public function bayar()
	{
		global $input; // Initialize $input with an empty string
		$bayar = null;
		if(isset($_POST["btn"])){
			$bayar = $_POST["bayar"];
			$_SESSION["uangKurang"] = 0;
			$_SESSION["kembalian"] = 0;
			if($bayar < $_SESSION["totalHarga"]){
				$_SESSION["uangKurang"] = $_SESSION["totalHarga"] - $bayar;
				$input = '<div style="text-align: center;" class="alert alert-danger mt-3" role="alert">
				Uang anda kurang ' . $_SESSION["uangKurang"] . '
				</div>';
			}else if($bayar >= $_SESSION["totalHarga"]){
				$_SESSION["kembalian"] = $bayar - $_SESSION["totalHarga"];
				$input = '<div style="text-align: center;" class="alert alert-success mt-3" role="alert">
				Uang cukup
			</div>';
			header("Location: bukti.php");
			exit;
			}
		}
	}


}

