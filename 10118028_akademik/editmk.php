<?php
	include_once("koneksi.php");
	if(isset($_POST['update']))
	{
		$id_dosen = $_POST['kode_mk'];
		$nama_dosen = $_POST['nama_mk'];
		$nama_dosen = $_POST['sks'];
		
		$result = mysqli_query($mysqli, "UPDATE matakuliah SET kode_mk='$kode_mk', nama_mk='$nama_mk', sks='$sks' WHERE kode_mk=$kode_mk");
		header("Location : matakuliah.php");
	}
?>	
<?php
	$kode_mk = $_GET['kode_mk'];
	$result = mysqli_query($mysqli, "SELECT * FROM matakuliah WHERE kode_mk=$kode_mk");
	while($user_data = mysqli_fetch_array($result))
	{
		$id_dosen = $user_data['kode_mk'];
		$nama_dosen = $user_data['nama_mk'];
		$nama_dosen = $user_data['sks'];
	}
?>
<html>
	<head>
		<title> Ubah Data Matakuliah </title>
	</head>
	<body>
		<br><br><br>
		<form action="editmk.php" method="post" name="update_matakuliah">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> UBAH DATA MATAKULIAH </b></td>
				</tr>
				<tr>
					<td><b> Kode Matakuliah </b></td>
					<td><input type="text" name="kode_mk" value=<?php echo $kode_mk;?>></td>
				</tr>
				<tr>
					<td><b> Nama Matakuliah </b></td>
					<td><input type="text" name="nama_mk" value=<?php echo $nama_mk;?>></td>
				</tr
				<tr>
					<td><b> SKS </b></td>
					<td><input type="text" name="sks" value=<?php echo $sks;?>></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="kode_mk" value=<?php echo $_GET['kode_mk'];?>>
					<input type="submit" name="update" value="UBAH">
					<button><a href="matakuliah.php">KEMBALI</a></button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>	