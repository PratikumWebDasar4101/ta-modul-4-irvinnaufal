<?php
session_start();
$hargapengiriman;
$totalharga;
$tgl=date('d-m-Y');
$pengiriman = $_POST["pengiriman"];
$belanjaan 	= $_POST["belanjaan"];
$alamat 	= $_POST["alamat"];	 
 echo "Tanggal Pembeliaan : $tgl <br><br>";
 echo "Data Alamat : $alamat";
 echo "<p>Belanjaan yang dipilih:</p>";

foreach ($belanjaan as $nilai) {
	echo "- $nilai <br />";
}

$totalBiaya = 0;

if ($pengiriman=="JNE") {
	$hargapengiriman = 8000;
}elseif ($pengiriman=="Uber") {
	$hargapengiriman = 12000;
}elseif ($pengiriman=="Grab"){
	$hargapengiriman = 15000;
}


for ($i = 0; $i < count($belanjaan); $i++) { 
	if ($belanjaan[$i] == "Television") {
		$harga = 4000000;
	} elseif($belanjaan[$i] == "Laptop"){
		$harga = 5000000;
	} else {
		$harga = 2500000;
	}
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($hargapengiriman)."<br>";
$totalBiaya = $totalBiaya + $hargapengiriman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"belanjaan" => $belanjaan, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanja'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
<br><br>
<a href="logout.php">Logout</a>