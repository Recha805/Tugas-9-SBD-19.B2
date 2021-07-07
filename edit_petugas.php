<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_petugas'];
	
	$id_petugas=$_POST['id_petugas'];
	$nama_petugas=$_POST['nama_petugas'];
    $alamat=$_POST['alamat'];
    $no_tlp=$_POST['no_tlp'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE petugas SET id_petugas='$id_petugas',nama_petugas='$nama_petugas',alamat='$alamat',no_tlp='$no_tlp' 
	WHERE id_petugas=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_petugas = $user_data['id_petugas'];
	$nama_petugas = $user_data['nama_petugas'];
    $alamat = $user_data['alamat'];
    $no_tlp = $user_data['no_tlp'];
}
?>
<html>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_petugas.php">
		<table border="0">
			<tr> 
				<td>ID Petugas</td>
				<td><input type="text" name="id_petugas" value=<?php echo $id_petugas;?>></td>
			</tr>
			<tr> 
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" value=<?php echo $nama_petugas;?>></td>
			</tr>
            <tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
				<td>No TLP</td>
				<td><input type="text" name="no_tlp" value=<?php echo $no_tlp;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>