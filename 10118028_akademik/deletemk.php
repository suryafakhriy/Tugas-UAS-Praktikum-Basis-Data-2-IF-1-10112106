<?php
	include_once("koneksi.php");
	$nim = $_GET['kode_mk'];
	$result = mysqli_query($mysqli, "DELETE FROM matakuliah WHERE kode_mk='$kode_mk'");
	header("Location: matakuliah.php");
?>	