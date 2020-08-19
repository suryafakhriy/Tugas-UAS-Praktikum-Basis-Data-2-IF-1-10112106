<?php
	include_once("koneksi.php");
	if(isset($_POST['update']))
	{
		$id_dosen = $_POST['nim'];
		$nama_dosen = $_POST['kode_mk'];
		$nama_dosen = $_POST['id_dosen'];
		$nama_dosen = $_POST['nilai'];
		
		$result = mysqli_query($mysqli, "UPDATE perkuliahan SET nim='$nim', kode_mk='$kode_mk', id_dosen='$id_dosen', nilai='$nilai' WHERE nim=$nim");
		header("Location : perkuliahan.php");
	}
?>	
<?php
	$nim = $_GET['nim'];
	$result = mysqli_query($mysqli, "SELECT * FROM perkuliahan WHERE nim=$nim");
	while($user_data = mysqli_fetch_array($result))
	{
		$id_dosen = $user_data['ni'];
		$nama_dosen = $user_data['kode_mk'];
		$nama_dosen = $user_data['id_dosen'];
		$nama_dosen = $user_data['nilai'];
	}
?>
<html>
	<head>
		<title> Ubah Data Perkuliahan </title>
	</head>
	<body>
		<br><br><br>
		<form action="editperkuliahan.php" method="post" name="update_perkuliahan">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> UBAH DATA PERKULIAHAN </b></td>
				</tr>
				<tr>
					<td><b> NIM </b></td>
					<td><input type="text" name="nim" value=<?php echo $nim;?> disabled></td>
				</tr>
				<tr>
					<td><b> Kode Matakuliah </b></td>
					<td><input type="text" name="kode_mk" value=<?php echo $kode_mk;?> disabled></td>
				</tr
				<tr>
					<td><b> Id Dosen </b></td>
					<td><input type="text" name="id_dosen" value=<?php echo $id_dosen;?> disabled></td>
				</tr>
				<tr>
					<td><b> Nilai </b></td>
					<td><input type="text" name="nilai" value=<?php echo $nilai;?> disabled></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>>
					<input type="submit" name="update" value="UBAH">
					<button><a href="perkuliahan.php">KEMBALI</a></button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>	