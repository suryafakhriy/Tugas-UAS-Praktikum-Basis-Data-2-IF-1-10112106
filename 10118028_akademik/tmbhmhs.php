<html>
	<head>
		<title> Tambah Mahasiswa </title>
	</head>
	<body>
		<br><br><br>
		<form action="tmbhmhs.php" method="post" name="form1">
			<table align="center" border="1">
				<tr>
					<td colspan="2" align="center"><b> Tambah Data Mahasiswa</b></td>
				</tr>	
				<tr>
					<td> NIM </td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td> Nama Mahasiswa </td>
					<td><input type="text" name="nama_mahasiswa"></td>
				</tr>
				<tr>
					<td> Tanggal Lahir </td>
					<td><input type="date" name="tgl_lahir"></td>
				</tr>
				<tr>
					<td> Jenis Kelamin </td>
					<td>
						<input type="radio" name="jns_kelamin" value="L">L
						<input type="radio" name="jns_kelamin" value="P">P
					</td>	
				</tr>
				<tr>
					<td> Alamat </td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="tambah">
						<button><a href="mahasiswa.php"> Kembali </a></button>
					</td>
				</tr>	
			</table>
		</form>	
		
		<?php
			if(isset($_POST['submit'])){
				$nim = $_POST['nim'];
				$nama_mahasiswa = $_POST['nama_mahasiswa'];
				$tgl_lahir = $_POST['tgl_lahir'];
				$jns_kelamin = $_POST['jns_kelamin'];
				$alamat = $_POST['alamat'];
				
				include_once("koneksi.php");
				$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim, nama_mahasiswa, tgl_lahir, jns_kelamin, alamat) VALUES ('$nim','$nama_mahasiswa','$tgl_lahir','$jns_kelamin','$alamat')");
				echo "<script>
						alert ('Berhasil Menambahkan Data Mahasiswa');
					  </script>";
				
			}
		?>	
	</body>
</html>	