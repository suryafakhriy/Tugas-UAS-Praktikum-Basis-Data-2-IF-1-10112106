<?php
	include_once("koneksi.php");
	$nim = $_GET['nim'];
	$result = mysqli_query($mysqli, "DELETE FROM perkuliahan WHERE nim='$nim'");
	header("Location: perkuliahan.php");
?>	