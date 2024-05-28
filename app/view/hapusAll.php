<?php 
session_start();
unset($_SESSION["dataSiswa"]);
unset($_SESSION["totalHarga"]);
header("Location: index.php");
exit;