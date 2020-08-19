<?php
	include_once("koneksi.php");
	$result = mysqli_query($mysqli, "SELECT * FROM matakuliah");
?>

<html>
		<head>
			<title> Matakuliah </title>
		</head>
		<body>
			<br><br>
			<table align="center" border="1">
				<tr>
					<td colspan="8"><p align="center"> MATAKULIAH </p></td>
				</tr>
				<tr>
					<th> Kode Matakuliah </th> <th> Nama Matakuliah</th> <th> SKS </th>
				</tr>	
		

			<?php
				while($user_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$user_data['kode_mk']."</td>";
					echo "<td>".$user_data['nama_mk']."</td>";
					echo "<td>".$user_data['sks']."</td>";
					echo "<td><a href='editmk.php?kode_mk=$user_data[kode_mk]'>Ubah</a></td>";
					echo "<td><a href='deletemk.php?kode_mk=$user_data[kode_mk]'>Hapus</a></td>";
				}
			?>		
			<tr>
				<td colspan="8" align="center"><a href="tmbhmk.php"><button><b> Tambah Data Matakuliah </b></button></a></td>
			</tr>	
			</table>
		</body>
</html>