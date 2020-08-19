<html>
	<head>
		<title> Tambah Dosen </title>
	</head>
	<body>
		<br><br><br>
		<form action="tmbhdosen.php" method="post" name="form1">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> Tambah Data Dosen</b></td>
				</tr>	
				<tr>
					<td> Id Dosen </td>
					<td><input type="text" name="id_dosen"></td>
				</tr>
				<tr>
					<td> Nama Dosen </td>
					<td><input type="text" name="nama_dosen"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="tambah">
						<button><a href="dosen.php"> Kembali </a></button>
					</td>
				</tr>	
			</table>
		</form>	
		
		<?php
			if(isset($_POST['submit'])){
				$id_dosen = $_POST['id_dosen'];
				$nama_dosen = $_POST['nama_dosen'];
				
				include_once("koneksi.php");
				$result = mysqli_query($mysqli, "INSERT INTO dosen(id_dosen, nama_dosen) VALUES ('$id_dosen','$nama_dosen')");
				echo "<script>
						alert ('Berhasil Menambahkan Data Dosen');
					  </script>";
				
			}
		?>	
	</body>
</html>	