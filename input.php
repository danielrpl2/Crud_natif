<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="input2.css">

</head>
<body background="7.gif" style="width: 20%;">

<button class="A"><a href="index.php">Back</a></button>
<div class="input-data">
<h2 class="judul">Tambahkan Data Buku</h2>

<form method="POST">
<div class="content">
<table>

<tr>
        <td class="name">ID BUKU </td>
        <td class="name"> :</td>
        <td ><input  type="text"  name="id_buku" ></td>
      </tr>
      
      <tr>
        <td class="name">JUDUL</td>
        <td class="name">:</td>
        <td><input type="text" name="judul"></td>
      </tr>

      <tr>
        <td class="name">DESKRIPSI</td>
        <td class="name">:</td>
        <td><input type="text" name="deskripsi"></td>
      </tr>

      <tr>
        <td class="name">PENULIS</td>
        <td class="name">:</td>
        <td><input type="text" name="penulis"></td>
      </tr>

      <tr>
        <td class="name">PENERBIT</td>
        <td class="name">:</td>
        <td ><input type="text" name="penerbit"></td>
      </tr>

      <tr>
        <td class="name">TAHUN TERBIT</td>
        <td class="name">:</td>
        <td><input type="text" name="tehun_terbit"></td>
      </tr>
      
      <tr>
      <td class="name">KATEGORI</td>
        <td class="name">:</td>
        <td><input type="text" name="kategori"></td>
      </tr>


	
</table>
<br>
<br>
<input type="submit" name="simpan">
</form>
</div>
</div>


<?php
if(isset($_POST['simpan'])){

    $id_buku = $_POST['id_buku'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	$penulis = $_POST['penulis'];
	$penerbit = $_POST['penerbit'];
	$tehun_terbit = $_POST['tehun_terbit'];
	$kategori = $_POST['kategori'];

	include 'koneksi.php';
	$connect	= new mysqli($hostname,$user,$pass,$database);

	$tambah = $connect ->query("insert into buku values ('$id_buku', '$judul', '$deskripsi','$penulis','$penerbit','$tehun_terbit','$kategori')");
		echo "<script>window.location.href='dasbor.php'</script>";	


}
?>


</body>
</html>













