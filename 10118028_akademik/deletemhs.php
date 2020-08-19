<?php
	include_once("koneksi.php");
	$nim = $_GET['nim'];
	$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE nim='$nim'");
	header("Location: mahasiswa.php");
?>	