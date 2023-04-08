<?php 
require_once '../../database/dbkoneksi.php';

$id = $_GET['iddel'];
$sql = "DELETE FROM prelanggan WHERE id= ?";
$statement = $dbh->prepare($sql);
$statement->execute([$id]);
// $query = "DELETE FROM pelanggan WHERE id= ?";
// $delete = $dbh->prepare($query);
// $delete->execute([$idde1]);

header('location:../../pages/pelanggan/list_pelanggan.php');
?>
