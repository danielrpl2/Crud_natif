<?php
// include database connection file
include("koneksi.php");
 
// Get id from URL to delete that user
$id_buku = $_GET['id_buku'];
 
// Delete user row from table based on given id
$connect    = new mysqli($hostname,$user,$pass,$database);
$hapus     = $connect->query("delete from buku where id_buku=$id_buku");
 echo "<script>window.location.href='dasbor.php'</script>";
 

?>


