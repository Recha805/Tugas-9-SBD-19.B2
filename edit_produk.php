<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_laptop'];
	
	$id_laptop=$_POST['id_laptop'];
	$merk=$_POST['merk'];
    $jenis=$_POST['jenis'];
    $tahun=$_POST['tahun'];
    $warna=$_POST['warna'];
    $harga=$_POST['harga'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE laptop SET id_laptop='$id_laptop',merk='$merk',jenis='$jenis',tahun='$tahun',warna='$warna',harga='$harga' 
	WHERE id_laptop=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM laptop WHERE id_laptop=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_laptop=$user_data['id_laptop'];
	$merk=$user_data['merk'];
    $jenis=$user_data['jenis'];
    $tahun=$user_data['tahun'];
    $warna=$user_data['warna'];
    $harga=$user_data['harga'];
}
?>
<html>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_produk.php">
		<table border="0">
			<tr> 
				<td>ID Laptop</td>
				<td><input type="text" name="id_laptop" value=<?php echo $id_laptop;?>></td>
			</tr>
			<tr> 
				<td>Merk</td>
				<td><input type="text" name="merk" value=<?php echo $merk;?>></td>
			</tr>
            <tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
            </tr>
            <tr> 
				<td>Tahun</td>
				<td><input type="text" name="tahun" value=<?php echo $tahun;?>></td>
            </tr>
            <tr> 
				<td>Warna</td>
				<td><input type="text" name="warna" value=<?php echo $warna;?>></td>
            </tr>
            <tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>