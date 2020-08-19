<?php
	include_once("koneksi.php");
	$result = mysqli_query($mysqli, "SELECT * FROM dosen");
?>
<html>
	<head>
		<title>Dosen</title>
	</head>
	<body>
		<br><br><br>
		<table align="center" border="1" width="800">
			<tr>
				<td colspan="8"><p align="center"> DOSEN </p></td>
			</tr>
			<tr>
				<th> Id Dosen </th> <th> Nama Dosen</th>
			</tr>	
		

			<?php
				while($user_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$user_data['id_dosen']."</td>";
					echo "<td>".$user_data['nama_dosen']."</td>";
					echo "<td><a href='editdosen.php?id_dosen=$user_data[id_dosen]'>Ubah</a></td>";
					echo "<td><a href='deletedosen.php?id_dosen=$user_data[id_dosen]'>Hapus</a></td>";
				}
			?>	
			<tr>
				<td colspan="8" align="center"><a href="tmbhdosen.php"><button><b> Tambah Data Dosen </b></button></a></td>
			</tr>	
		</table>		
	</body>
</html>	