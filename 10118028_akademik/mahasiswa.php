<?php
	include_once("koneksi.php");
	$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
?>

<html>
		<head>
			<title> Mahasiswa </title>
		</head>
		<body>
			<br><br>
			<table align="center" border="1">
				<tr>
					<td colspan="8"><p align="center"> MAHASISWA </p></td>
				</tr>
				<tr>
					<th> NIM </th> <th> Nama Mahasiswa</th> <th> Tanggal Lahir </th> <th> Jenis Kelamin </th> <th> Alamat </th>
				</tr>	
		

			<?php
				while($user_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$user_data['nim']."</td>";
					echo "<td>".$user_data['nama_mahasiswa']."</td>";
					echo "<td>".$user_data['tgl_lahir']."</td>";
					echo "<td>".$user_data['jns_kelamin']."</td>";
					echo "<td>".$user_data['alamat']."</td>";
					echo "<td><a href='editmhs.php?nim=$user_data[nim]'>Ubah</a></td>";
					echo "<td><a href='deletemhs.php?nim=$user_data[nim]'>Hapus</a></td>";
				}
			?>		
			<tr>
				<td colspan="8" align="center"><a href="tmbhmhs.php"><button><b> Tambah Data Mahasiswa </b></button></a></td>
			</tr>	
			</table>
		</body>
</html>