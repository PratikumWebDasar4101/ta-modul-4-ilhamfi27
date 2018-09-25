<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mengisi Data Diri</title>
  </head>
  <body>
    <form action="proses.php" method="post" enctype="multipart/form-data">
      <table>
        <?php
        if (isset($_SESSION['pesan_error_file'])) {
        ?>
        <tr>
          <td colspan="2">Error : <?php echo $_SESSION['pesan_error_file']; ?></td>
        </tr>
        <?php
        unset($_SESSION['pesan_error_file']);
        }
        ?>
        <tr>
          <td valign="top">
            <label>Foto : </label>
          </td>
          <td>
            <input type="file" name="foto"><br>
          </td>
        </tr>
				<tr>
					<td valign="top">
						<label>Hobby : </label>
					</td>
					<td>
						<input type="checkbox" name="hobby[]" value="Membaca">Membaca<br>
						<input type="checkbox" name="hobby[]" value="Menulis">Menulis<br>
						<input type="checkbox" name="hobby[]" value="Memasak">Memasak<br>
						<input type="checkbox" name="hobby[]" value="Mereparasi Barang">Mereparasi Barang<br>
						<input type="checkbox" name="hobby[]" value="Bersepeda">Bersepeda<br>
						<input type="checkbox" name="hobby[]" value="Memancing">Memancing<br>
						<input type="checkbox" name="hobby[]" value="Balapan">Balapan<br>
						<input type="checkbox" name="hobby[]" value="Berenang">Berenang<br>
						<input type="checkbox" name="hobby[]" value="Badminton">Badminton<br>
						<input type="checkbox" name="hobby[]" value="Futsal">Futsal<br>
						<input type="checkbox" name="hobby[]" value="Basket">Basket<br>
					</td>
				</tr>
				<tr>
					<td valign="top">
						<label>Genre Film Favorit : </label>
					</td>
					<td>
            <input type="checkbox" name="film[]" value="Action">Action<br>
            <input type="checkbox" name="film[]" value="Adventure">Adventure<br>
            <input type="checkbox" name="film[]" value="Animation">Animation<br>
            <input type="checkbox" name="film[]" value="Biography">Biography<br>
            <input type="checkbox" name="film[]" value="Comedy">Comedy<br>
            <input type="checkbox" name="film[]" value="Crime">Crime<br>
            <input type="checkbox" name="film[]" value="Documentary">Documentary<br>
            <input type="checkbox" name="film[]" value="Drama">Drama<br>
            <input type="checkbox" name="film[]" value="Family">Family<br>
            <input type="checkbox" name="film[]" value="Fantasy">Fantasy<br>
            <input type="checkbox" name="film[]" value="History">History<br>
            <input type="checkbox" name="film[]" value="Horror">Horror<br>
            <input type="checkbox" name="film[]" value="Musicals">Musicals<br>
            <input type="checkbox" name="film[]" value="Mystery">Mystery<br>
            <input type="checkbox" name="film[]" value="Romance">Romance<br>
            <input type="checkbox" name="film[]" value="Sci-Fi">Sci-Fi<br>
            <input type="checkbox" name="film[]" value="Sport">Sport<br>
            <input type="checkbox" name="film[]" value="Thriller">Thriller<br>
            <input type="checkbox" name="film[]" value="War">War<br>
            <input type="checkbox" name="film[]" value="Western">Western<br>
					</td>
				</tr>
				<tr>
					<td valign="top">
						<label>Tempat Wisata Favorit : </label>
					</td>
					<td>
						<input type="checkbox" name="wisata[]" value="Pantai Sumurtiga – Sabang">Pantai Sumurtiga – Sabang<br>
						<input type="checkbox" name="wisata[]" value="Ngarai Sianok – Bukittinggi">Ngarai Sianok – Bukittinggi<br>
						<input type="checkbox" name="wisata[]" value="Sungai Kampar – Riau">Sungai Kampar – Riau<br>
						<input type="checkbox" name="wisata[]" value="Anambas – Kepulauan Riau">Anambas – Kepulauan Riau<br>
						<input type="checkbox" name="wisata[]" value="Candi Muaro Jambi – Jambi">Candi Muaro Jambi – Jambi<br>
						<input type="checkbox" name="wisata[]" value="Fort Marlborough – Bengkulu">Fort Marlborough – Bengkulu<br>
						<input type="checkbox" name="wisata[]" value="Museum Sultan Mahmud Badaruddin – Palembang">Museum Sultan Mahmud Badaruddin – Palembang<br>
						<input type="checkbox" name="wisata[]" value="Pantai Parai Tenggiri – Bangka Belitung">Pantai Parai Tenggiri – Bangka Belitung<br>
						<input type="checkbox" name="wisata[]" value="Taman Nasional Way Kambas – Lampung">Taman Nasional Way Kambas – Lampung<br>
						<input type="checkbox" name="wisata[]" value="Pulau Peucang – Banten">Pulau Peucang – Banten<br>
            <input type="checkbox" name="wisata[]" value="Kawah Putih – Bandung, Jawa Barat">Kawah Putih – Bandung, Jawa Barat<br>
						<input type="checkbox" name="wisata[]" value="Lainnya">Lainnya<br>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit">
				</tr>
			</table>
    </form>
  </body>
</html>
