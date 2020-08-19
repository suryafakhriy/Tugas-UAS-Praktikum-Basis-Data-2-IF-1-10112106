<?php
	include_once("koneksi.php");
	if(isset($_POST['update']))
	{
		$nim = $_POST['nim'];
		$nama_mahasiswa = $_POST['nama_mahasiswa'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$jns_kelamin = $_POST['jns_kelamin'];
		$alamat = $_POST['alamat'];
		$result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', alamat='$alamat' WHERE nim=$nim");
		header("Location : mahasiswa.php");
	}
?>	
<?php
	$nim = $_GET['nim'];
	$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");
	while($user_data = mysqli_fetch_array($result))
	{
		$nim = $user_data['nim'];
		$nama_mahasiswa = $user_data['nama_mahasiswa'];
		$tgl_lahir = $user_data ['tgl_lahir'];
		$jns_kelamin = $user_data ['jns_kelamin'];
		$alamat = $user_data ['alamat'];
	}
?>
<html>
	<head>
		<title> Ubah Data Mahasiswa </title>
	</head>
	<body>
		<br><br><br>
		<form action="editmhs.php" method="post" name="update_mahasiswa">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> UBAH DATA MAHASISWA </b></td>
				</tr>
				<tr>
					<td><b> NIM </b></td>
					<td><input type="text" name="nim" value=<?php echo $nim;?>></td>
				</tr>
				<tr>
					<td><b> Nama Mahasiswa </b></td>
					<td><input type="text" name="nama_mahasiswa" value=<?php echo $nama_mahasiswa;?>></td>
				</tr>
				<tr>
					<td><b> Tanggal Lahir </b></td>
					<td><input type="date" name="tgl_lahir" value=<?php echo $tgl_lahir;?>></td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td>
						<input type="radio" name="jns_kelamin" value="L">L
						<input type="radio" name="jns_kelamin" value="P">P
					</td>	
				</tr>
				<tr>
					<td><b> Alamat </b></td>
					<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>>
					<input type="submit" name="update" value="UBAH">
					<button><a href="mahasiswa.php">KEMBALI</a></button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>	