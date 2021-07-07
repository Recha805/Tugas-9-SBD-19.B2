<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_pembeli.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama_pembeli"></td>
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
				<td><input type="submit" name="Submit" value="Add Pembeli"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_pembeli = $_POST['id_pembeli'];
		$nama_pembeli = $_POST['nama_pembeli'];
		$alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO pembeli(id_pembeli,nama_pembeli,alamat,no_tlp) 
		VALUES('$id_pembeli','$nama_pembeli','$alamat','$no_tlp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>