<?php
// include database connection file
include("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
// Delete table suplier
$result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli=$id");
// Delete table produk
$result = mysqli_query($conn, "DELETE FROM laptop WHERE id_laptop=$id");
// Delete table pembeli
$result = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas=$id");
// Delete table transaksi
$result = mysqli_query($conn, "DELETE FROM kredit WHERE id_kredit=$id");
// After delete redirect to Home, so that latest user list will be displayed.a

header("Location: index.php");
?>