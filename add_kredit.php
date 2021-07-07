<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_kredit.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Kredit</td>
				<td><input type="text" name="id_kredit"></td>
			</tr>
			<tr> 
				<td>Petugas</td>
				<td><input type="text" name="id_petugas"></td>
			</tr>
			<tr> 
				<td>Pembeli</td>
				<td><input type="text" name="id_pembeli"></td>
			</tr>
			<tr>
				<td>Laptop</td>
				<td><input type="text" name="id_laptop"></td>
			</tr>
            <tr>
				<td>Tanggal Kredit</td>
				<td><input type="text" name="tgl_kredit"></td>
            </tr>
            <tr>
				<td>Tanggal Lunas</td>
				<td><input type="text" name="tgl_lunas"></td>
            </tr>
            <tr>
				<td>Tanggal Bayar</td>
				<td><input type="text" name="total_bayar"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Kredit"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_kredit = $_POST['id_kredit'];
		$id_petugas = $_POST['id_petugas'];
		$id_pembeli = $_POST['id_pembeli'];
		$id_laptop = $_POST['id_laptop'];
        $tgl_kredit = $_POST['tgl_kredit'];
        $tgl_lunas = $_POST['tgl_lunas'];
        $total_bayar = $_POST['total_bayar'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO kredit(id_kredit,id_petugas,id_pembeli,id_laptop,tgl_kredit,tgl_lunas,total_bayar) 
		VALUES('$id_kredit','$id_petugas','$id_pembeli','$id_laptop','$tgl_kredit','$tgl_lunas','$total_bayar')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>