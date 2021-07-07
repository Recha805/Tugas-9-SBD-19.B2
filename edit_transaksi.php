<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_kredit'];
	
	$id_kredit=$_POST['id_kredit'];
	$id_petugas=$_POST['id_petugas'];
    $id_pembeli=$_POST['id_pembeli'];
    $id_laptop=$_POST['id_laptop'];
    $tgl_kredit=$_POST['tgl_kredit'];
    $tgl_lunas=$_POST['tgl_lunas'];
    $total_bayar=$_POST['total_bayar'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE kredit SET id_kredit='$id_kredit',id_petugas='$id_petugas',id_pembeli='$id_pembeli',id_laptop='$id_laptop',tgl_kredit='$tgl_kredit',tgl_lunas='$tgl_lunas',total_bayar='$total_bayar' 
	WHERE id_kredit=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM kredit WHERE id_kredit=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_kredit=$user_data['id_kredit'];
	$id_petugas=$user_data['id_petugas'];
    $id_pembeli=$user_data['id_pembeli'];
    $id_laptop=$user_data['id_laptop'];
    $tgl_kredit=$user_data['tgl_kredit'];
    $tgl_lunas=$user_data['tgl_lunas'];
    $total_bayar=$user_data['total_bayar'];
}
?>
<html>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_transaksi.php">
		<table border="0">
			<tr> 
				<td>ID Kredit</td>
				<td><input type="text" name="id_kredit" value=<?php echo $id_kredit;?>></td>
			</tr>
			<tr> 
				<td>Petugas</td>
				<td><input type="text" name="id_petugas" value=<?php echo $id_petugas;?>></td>
			</tr>
            <tr> 
				<td>Pembeli</td>
				<td><input type="text" name="id_pembeli" value=<?php echo $id_pembeli;?>></td>
            </tr>
            <tr> 
				<td>Laptop</td>
				<td><input type="text" name="id_laptop" value=<?php echo $id_laptop;?>></td>
            </tr>
            <tr> 
				<td>Tanggal Kredit</td>
				<td><input type="text" name="tgl_kredit" value=<?php echo $tgl_kredit;?>></td>
            </tr>
            <tr> 
				<td>Tanggal Lunas</td>
				<td><input type="text" name="tgl_lunas" value=<?php echo $tgl_lunas;?>></td>
            </tr>
            <tr> 
				<td>Total Bayar</td>
				<td><input type="text" name="total_bayar" value=<?php echo $total_bayar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>