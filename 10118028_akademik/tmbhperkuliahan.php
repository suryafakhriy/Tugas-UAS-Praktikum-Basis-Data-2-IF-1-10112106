<html>
	<head>
		<title> Tambah Perkuliahan </title>
	</head>
	<body>
		<br><br><br>
		<form action="tmbhperkuliahan.php" method="post" name="form1">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> Tambah Data Perkuliahan</b></td>
				</tr>	
				<tr>
					<td> NIM </td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td> Kode Matakukiah </td>
					<td><input type="text" name="kode_mk"></td>
				</tr>
				<tr>
					<td> Id Dosen </td>
					<td><input type="text" name="id_dosen"></td>
				</tr>
				<tr>
					<td> nilai </td>
					<td><input type="text" name="nilai"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="tambah">
						<button><a href="perkuliahan.php"> Kembali </a></button>
					</td>
				</tr>	
			</table>
		</form>	
		
		<?php
			if(isset($_POST['submit'])){
				$nim = $_POST['nim'];
				$kode_mk = $_POST['kode_mk'];
				$id_dosen = $_POST['id_dosen'];
				$nilai = $_POST['nilai'];
				include_once("koneksi.php");
				$result = mysqli_query($mysqli, "INSERT INTO perkuliahan(nim, kode_mk, id_dosen, nilai,) VALUES ('$nim','$kode_mk','$id_dosen','$nilai')");
				echo "<script>
						alert ('Berhasil Menambahkan Data Perkuliahan');
					  </script>";
				
			}
		?>	
	</body>
</html>	