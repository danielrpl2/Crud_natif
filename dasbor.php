<?php
session_start();
$level = $_SESSION['level'];
$tiket = $_SESSION['login'];
if($tiket!='OK'){
	echo '<script>window.alert("Silahkan login terlebih dahulu!")</script>';
	echo '<script>window.location.href="lndex.php"</script>';
}
include 'koneksi.php';
$koneksi	= new mysqli($hostname,$user,$pass,$database);
$tampil = $koneksi->query("select * from buku");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
	<h2>DATA SEMUA BUKU</h2>
	<h3>PERPUSTAKAAN</h3>
    </div>
   
      <?php if($level=='admin'){ ?>
       <h4>TAMBAH DI SINI</h4>
            <?php }  ?>
       <?php if($level=='admin'){ ?>
      <button class="B"><a href="input.php">Input Data Barang</a></button><br>
      <?php }  ?>
       <button class="B"><a href="logout.php">Logout</a></button><br>
    

<br>


	
<?php

include 'koneksi.php';
$connect	= new mysqli($hostname,$user,$pass,$database);
$tampil 	= $connect->query("select * from buku");

?>

<table border="2">
	<tr>
		   <th>ID_BUKU</th>
			<th>JUDUL</th>
			<th>DESKRIPSI</th>
			<th>PENULIS</th>
			<th>PENERBIT</th>
			<th>TAHUN TERBIT</th>
			<th>KATEGORI</th>
			 <?php if($level=='admin'){ ?>
			<th colspan="2">Action</th>
			 <?php }  ?>
	
			
	</tr>
<?php foreach($tampil as $baris){ ?>
	<tr>
		   <td><?=$baris['id_buku']?></td>
			<td><?=$baris['judul']?></td>
			<td><?=$baris['deskripsi']?></td>
			<td><?=$baris['penulis']?></td>
			<td><?=$baris['penerbit']?></td>
			<td><?=$baris['tehun_terbit']?></td>
			<td><?=$baris['kategori']?></td>
			<?php if($level=='admin'){ ?>
			<td><button class="A"><a href="delete.php?id_buku=<?=$baris['id_buku']?>">Delete</a></button></td>
			<?php }  ?>
			<?php if($level=='admin'){ ?>
			<td><button class="C"><a href="ubah.php?id_buku=<?=$baris['id_buku']?>">Ubah</a></button></td>
			<?php }  ?>

		

	</tr>
<?php }  ?>
</table>

<a class="btn btn-danger" href="index.php">Logout</a>

</body>
</html>


