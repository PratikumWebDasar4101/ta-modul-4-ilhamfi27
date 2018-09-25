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
$jenis_pengiriman = array(
	"JNE" => 20000,
	"Tiki" => 30000,
	"HDL" => 40000,
	"J&T" => 250000,
	"Pos Indonesia" => 10000
);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="proses_belanja.php" method="POST">
			<table>
				<tr>
					<td>Nama Pengguna: </td>
					<td align="right"><?php echo $_SESSION['name']; ?></td>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
				<tr>
					<td>
						<label>Daftar Barang </label>
					</td>
					<td>
						<?php
						foreach ($daftar_barang as $key => $value) {
						?>
						<input type="checkbox" name="barang[]" value="<?php echo $key; ?>"> <?php echo $key; ?><br>
						<?php
						}
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
				<tr>
					<td>
						<label>Jenis Pengiriman</label>
					</td>
					<td>
						<?php
						foreach ($jenis_pengiriman as $key => $value) {
						?>
						<input type="radio" name="jenis_pengiriman" value="<?php echo $key; ?>"><?php echo $key; ?><br>
						<?php
						}
						?>
					</td>
				</tr>
				<tr>
					<td colspan="2"><hr></td>
				</tr>
				<tr>
					<td>
						<label>Alamat</label>
					</td>
					<td>
						<textarea name="alamat" placeholder="Alamat" cols="40" rows="4"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
