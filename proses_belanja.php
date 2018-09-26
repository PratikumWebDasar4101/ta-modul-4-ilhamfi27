<?php
session_start();
$daftar_barang = array(
	"Minyak 1 L" => 12000,
	"Beras 10 kg" => 200000,
	"Telur 1 kg" => 37000,
	"Mie 1 Dus" => 45000,
	"Sabun Mandi" => 4000,
	"Sabun Cuci" => 8000,
	"Pasta Gigi" => 6000,
	"Merica" => 24000,
	"Cabai 1 kg" => 13000,
	"Jahe 1 kg" => 21000,
	"Kunyit 1 kg" => 18000,
	"Kentang 10 kg" => 19000,
	"Lobak 5 kg" => 75000
);
$jasa_pengiriman = array(
	"JNE" => 20000,
	"Tiki" => 30000,
	"HDL" => 40000,
	"J&T" => 250000,
	"Pos Indonesia" => 10000
);
if (isset($_POST['submit'])) {
  $barang = $_POST['barang'];
  $jenis_pengiriman = $_POST['jenis_pengiriman'];
  $alamat = $_POST['alamat'];
  $_SESSION['barang'] = $barang;
	$_SESSION['jasa_pengiriman'] = $jenis_pengiriman;
	$_SESSION['harga_jasa_pengiriman'] = $jasa_pengiriman[$jenis_pengiriman];
	$_SESSION['total_harga'] = hitung_total($barang);
	header('location: struk_belanja.php');
}
function hitung_total($barang){
  global $daftar_barang;
  $total = 0;
  foreach ($barang as $value) {
    $total += $daftar_barang[$value];
  }
  return $total;
}
?>
