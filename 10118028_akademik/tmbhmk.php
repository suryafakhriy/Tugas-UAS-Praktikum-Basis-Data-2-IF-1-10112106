<html>
	<head>
		<title> Tambah Matakuliah </title>
	</head>
	<body>
		<br><br><br>
		<form action="tmbhmk.php" method="post" name="form1">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> Tambah Data Matakuliah</b></td>
				</tr>	
				<tr>
					<td> Kode Matakuliah </td>
					<td><input type="text" name="kode_mk"></td>
				</tr>
				<tr>
					<td> Nama Matakuliah </td>
					<td><input type="text" name="nama_mk"></td>
				</tr>
				<tr>
					<td> SKS </td>
					<td><input type="text" name="sks"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="tambah">
						<button><a href="matakuliah.php"> KEMBALI </a></button>
					</td>
				</tr>	
			</table>
		</form>	
		
		<?php
			if(isset($_POST['submit'])){
				$kode_mk = $_POST['kode_mk'];
				$nama_mk = $_POST['nama_mk'];
				$sks = $_POST['sks'];
				include_once("koneksi.php");
				$result = mysqli_query($mysqli, "INSERT INTO matakuliah(kode_mk, nama_mk, sks) VALUES ('$kode_mk','$nama_mk','$sks')");
				echo "<script>
						alert ('Berhasil Menambahkan Data Matakuliah');
					  </script>";
				
			}
		?>	
	</body>
</html>	