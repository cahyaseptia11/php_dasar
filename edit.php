<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($db,"select * from mahasiswa where nim='$nim'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>						
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
                <tr>
					<td>Semester</td>
					<td><input type="number" name="semester" value="<?php echo $d['semester']; ?>"></td>
				</tr>
                <tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>
