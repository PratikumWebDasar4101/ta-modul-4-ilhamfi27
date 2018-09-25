<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data User</title>
	</head>
	<body>
		<center>
			<table border>
				<tr>
					<td colspan="2" align="center">
						<img src="../multimedia_storage/images/<?php echo $_SESSION['foto']; ?>" width="200">
					</td>
				</tr>
        <tr>
          <td colspan="2">Hobby</td>
        </tr>
				<tr>
					<th>Hobby</th>
					<th>Action</th>
				</tr>
				<?php
				$data = $_SESSION['hobby'];
				$index = 0;
				foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value; ?></td>
					<td>
            <button type="button" name="button">Hapus</button>
					</td>
				</tr>
				<?php
				}
				?>
        <tr>
          <td colspan="2">Genre Film Favorit</td>
        </tr>
				<tr>
					<th>Film</th>
					<th>Action</th>
				</tr>
				<?php
				$data = $_SESSION['film'];
				$index = 0;
				foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value; ?></td>
					<td>
            <button type="button" name="button">Hapus</button>
					</td>
				</tr>
				<?php
				}
				?>
        <tr>
          <td colspan="2">Tujuan Wisata Favorit</td>
        </tr>
				<tr>
					<th>Tujuan Wisata</th>
					<th>Action</th>
				</tr>
				<?php
				$data = $_SESSION['wisata'];
				$index = 0;
				foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value; ?></td>
					<td>
            <button type="button" name="button">Hapus</button>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</center>
	</body>
</html>
