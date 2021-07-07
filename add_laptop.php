<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_laptop.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Laptop</td>
				<td><input type="text" name="id_laptop"></td>
			</tr>
			<tr> 
				<td>Merk</td>
				<td><input type="text" name="merk"></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td><input type="text" name="tahun"></td>
			</tr>
            <tr>
				<td>Warna</td>
				<td><input type="text" name="warna"></td>
            </tr>
            <tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add Laptop"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_laptop = $_POST['id_laptop'];
		$merk = $_POST['merk'];
		$jenis = $_POST['jenis'];
		$tahun = $_POST['tahun'];
        $warna = $_POST['warna'];
        $harga = $_POST['harga'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO laptop(id_laptop,merk,jenis,tahun,warna,harga) 
		VALUES('$id_laptop','$merk','$jenis','$tahun','$warna','$harga')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>