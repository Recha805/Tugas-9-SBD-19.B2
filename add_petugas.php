<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_petugas.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Petugas</td>
				<td><input type="text" name="id_petugas"></td>
			</tr>
			<tr> 
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No TLP</td>
				<td><input type="text" name="no_tlp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Petugas"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_petugas = $_POST['id_petugas'];
		$nama_petugas = $_POST['nama_petugas'];
		$alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO petugas(id_petugas,nama_petugas,alamat,no_tlp) 
		VALUES('$id_petugas','$nama_petugas','$alamat','$no_tlp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>