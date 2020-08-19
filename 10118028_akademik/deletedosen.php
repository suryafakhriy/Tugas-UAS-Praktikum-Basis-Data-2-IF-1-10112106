<?php
	include_once("koneksi.php");
	$nim = $_GET['id_dosen'];
	$result = mysqli_query($mysqli, "DELETE FROM dosen WHERE id_dosen='$id_dosen'");
	header("Location: dosen.php");
?>	