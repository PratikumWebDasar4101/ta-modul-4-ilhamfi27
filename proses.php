<?php
session_start();
if (isset($_POST['submit'])) {
	// pemrosesan foto
	$file_name = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
  $error = $_FILES['foto']['error'];
	$file_move_success = move_uploaded_file($tmp_name, '../multimedia_storage/images/'.$file_name);

  $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : "";
  $film = isset($_POST['film']) ? $_POST['film'] : "";
  $wisata = isset($_POST['wisata']) ? $_POST['wisata'] : "";

  $file_success = 0;
  if ($error < 1) {
  	if($file_move_success){
      $file_success = 1;
  	} else {
      $file_success = 0;
    }
  } else {
    $file_success = 0;
  }

  if($file_success > 0){
    $_SESSION['hobby'] = $hobby;
    $_SESSION['film'] = $film;
    $_SESSION['wisata'] = $wisata;
    $_SESSION['foto'] = $file_name;
    header('location: halaman_akhir.php');
  } else {
    $_SESSION['pesan_error_file'] = "Terjadi Kesalahan Saat Mengupload Foto";
  }
}
?>
