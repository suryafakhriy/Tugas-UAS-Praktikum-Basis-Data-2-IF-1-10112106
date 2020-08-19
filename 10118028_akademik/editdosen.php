<?php
	include_once("koneksi.php");
	if(isset($_POST['update']))
	{
		$id_dosen = $_POST['id_dosen'];
		$nama_dosen = $_POST['nama_dosen'];
		
		$result = mysqli_query($mysqli, "UPDATE dosen SET id_dosen='$id_dosen', nama_dosen='$nama_dosen' WHERE id_dosen=$id_dosen");
		header("Location : dosen.php");
	}
?>	
<?php
	$nim = $_GET['id_dosen'];
	$result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE id_dosen=$id_dosen");
	while($user_data = mysqli_fetch_array($result))
	{
		$id_dosen = $user_data['id_dosen'];
		$nama_dosen = $user_data['nama_dosen'];
	}
?>
<html>
	<head>
		<title> Ubah Data Dosen </title>
	</head>
	<body>
		<br><br><br>
		<form action="editdosen.php" method="post" name="update_dosen">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> UBAH DATA MAHASISWA </b></td>
				</tr>
				<tr>
					<td><b> Id Dosen </b></td>
					<td><input type="text" name="id_dosen" value=<?php echo $id_dosen;?>></td>
				</tr>
				<tr>
					<td><b> Nama Dosen </b></td>
					<td><input type="text" name="nama_dosen" value=<?php echo $nama_dosen;?> ></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
					<input type="hidden" name="id_dosen" value=<?php echo $_GET['id_dosen'];?>>
					<input type="submit" name="update" value="UBAH">
					<button><a href="dosen.php">KEMBALI</a></button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>	