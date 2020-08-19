<?php
	include_once("koneksi.php");
	$result = mysqli_query($mysqli, "SELECT * FROM perkuliahan");
?>

<html>
		<head>
			<title> Perkuliahan </title>
		</head>
		<body>
			<br><br>
			<table align="center" border="1">
				<tr>
					<td colspan="8"><p align="center"> PERKULIAHAN </p></td>
				</tr>
				<tr>
					<th> NIM </th> <th> Kode Matakuliah</th> <th> Id Dosen </th> <th> Nilai </th>
				</tr>	
		

			<?php
				while($user_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$user_data['nim']."</td>";
					echo "<td>".$user_data['kode_mk']."</td>";
					echo "<td>".$user_data['id_dosen']."</td>";
					echo "<td>".$user_data['nilai']."</td>";
					echo "<td><a href='editperkuliahan.php?nim=$user_data[nim]'>Ubah</a></td>";
					echo "<td><a href='deleteperkuliahan.php?nim=$user_data[nim]'>Hapus</a></td>";
				}
			?>		
			<tr>
				<td colspan="8" align="center"><a href="tmbhperkuliahan.php"><button><b> Tambah Data Perkuliahan </b></button></a></td>
			</tr>	
			</table>
		</body>
</html>